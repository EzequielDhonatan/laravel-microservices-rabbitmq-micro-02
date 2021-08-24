<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\{

    /*
    ================================================== */
    Evaluation\EvaluationController, ## EVALUATION

}; // Controllers

Route::group(

    [
        'prefix'        => 'v1',
    ], function () {

    /*
    ================================================== */
    Route::get( 'evaluation/{company}', [ EvaluationController::class, 'index' ] ); ## EVALUATION

}); // Route::group

Route::get( '', function() {

    return response()->json( [ 'message' => 'sucess' ] );

}); //
