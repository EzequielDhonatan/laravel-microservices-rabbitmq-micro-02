<?php

namespace App\Http\Requests\Api\V1\Evaluation;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'company'       => [ 'required' ],
            'stars'         => [ 'required', 'integer', 'min:1', 'max:5' ],
            'comment'       => [ 'required', 'min:3', 'max:99999' ]

        ]; // return
    } // rules
} // StoreUpdateFormRequest
