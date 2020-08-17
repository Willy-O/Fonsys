<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectInfo extends FormRequest
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
            'summary' => 'required|min:5|string',
            'time' => 'required|string',
            'problem' => 'required|min:5|string',
            'precedent' => 'required|min:5|string',
            'justification' => 'required|min:5|string',
            'generalObjective' => 'required|min:5|string',
            'specificObjective' => 'required|min:5|string',
            'hopedResults' => 'required|min:5|string',
            'hopedEfects' => 'required|min:5|string',
        ];
    }
}
