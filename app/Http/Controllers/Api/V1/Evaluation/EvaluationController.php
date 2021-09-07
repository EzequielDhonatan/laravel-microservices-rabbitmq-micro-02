<?php

namespace App\Http\Controllers\Api\V1\Evaluation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Api\V1\Evaluation\Evaluation;
use App\Http\Resources\Api\V1\Evaluation\EvaluationResource;
use App\Http\Requests\Api\V1\Evaluation\StoreUpdateFormRequest;
use App\Services\Api\V1\Company\CompanyService;

class EvaluationController extends Controller
{
    protected $repository;

    public function __construct( Evaluation $model, CompanyService $companyService )
    {
        $this->repository       = $model;
        $this->companyService   = $companyService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $company )
    {
        $evaluations = $this->repository->where( 'company', $company )->latest()->get(); // Recupera pela 'company', lista e ordena

        return EvaluationResource::collection( $evaluations ); // Retorna uma "Resource/Collection"
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( StoreUpdateFormRequest $request, $company )
    {
        $response = $this->companyService->getCompany( $company );

        if ( $status = $response->status() != 200 )
            return response()->json( [ 'message' => 'Invalid Company' ], $status );

        $evaluation = $this->repository->create( $request->validated() );

        return new EvaluationResource( $evaluation ); // Retorna uma "Resource/Collection"
    }

} // EvaluationController
