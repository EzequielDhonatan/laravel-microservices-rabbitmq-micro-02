<?php

namespace Tests\Feature\Api\V1\Evaluation;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Support\Str;
use App\Models\Api\V1\Evaluation\Evaluation;

class EvaluationTest extends TestCase
{
    protected $version = 'v1';
    protected $endpoint = 'evaluation';

    /**
     * Test Empty Response
     *
     * @return void
     */
    public function test_get_evaluations_empty()
    {
        $response = $this->getJson( "{$this->version}/{$this->endpoint}/fake-company" );

        $response->assertStatus( 200 )->assertJsonCount( 0, 'data' );
    }

    /**
     * Get All Evaluations Company
     *
     * @return void
     */
    public function test_get_evaluations_company()
    {
        $company = ( string ) Str::uuid();
        $evaluations = Evaluation::factory()->count( 6 )->create([
            'company' => $company
        ]);

        $response = $this->getJson( "{$this->version}/{$this->endpoint}/{$company}" );

        $response->assertStatus( 200 )
                    ->assertJsonCount( 6, 'data' );
    }

    /**
     * Error Validations
     *
     * @return void
     */
    public function test_error_store_evaluation()
    {
        $response = $this->postJson( "{$this->version}/{$this->endpoint}/fake-company", [] );

        $response->assertStatus( 422 );
    }

    /**
     * Error Validations
     *
     * @return void
     */
    public function test_store_evaluation()
    {
        $company = '/fake-company';

        $response = $this->postJson( "{$this->version}/{$this->endpoint}/{$company}", [
            'company'   => ( string ) Str::uuid(),
            'stars'     => 5,
            'comment'   => 'New Comment'
        ]);

        $response->assertStatus( 404 );
    }

} // EvaluationTest
