<?php

namespace Database\Factories\Api\V1\Evaluation;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Api\V1\Evaluation\Evaluation;

use Illuminate\Support\Str;

class EvaluationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evaluation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'company'       => ( string ) Str::uuid(),
            'stars'         => $this->faker->sentence( 10 ),
            'comment'       => 5

        ]; // return

    } // definition
} // EvaluationFactory
