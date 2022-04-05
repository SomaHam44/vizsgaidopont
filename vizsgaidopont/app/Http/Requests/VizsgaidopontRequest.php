<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VizsgaidopontRequest extends FormRequest
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
            /*'targy' => 'required|string|min:3',
            'tipus' => 'required|string:erettsegi,szakmai',
            'kezdes' => 'required|datetime',
            */
        ];
    }
}
