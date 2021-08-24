<?php

namespace App\Http\Resources\Api\V1\Evaluation;

use Illuminate\Http\Resources\Json\JsonResource;

use Carbon\Carbon;

class EvaluationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray( $request )
    {
        return [

            'stars'             => $this->stars,
            'comment'           => $this->comment,
            'date_created'      => Carbon::make( $this->created_at )->format( 'd/m/Y' )

        ]; // return
    }

} // EvaluationResource
