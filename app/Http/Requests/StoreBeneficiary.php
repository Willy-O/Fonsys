<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBeneficiary extends FormRequest
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
            'name' => 'required|min:3|max:20|string',
            'lastName' => 'required|min:3|max:20|string',
            'dateBorn' => 'required|date',
            'email' => 'required|email|unique:beneficiaries',
            'homeAddress' => 'required|string',
            'codeCellPhone' => 'required|numeric|min:111|max:9999',
            'cellPhone' => 'required|numeric|min:111111|max:999999999',
            'codeHomePhone' => 'required|numeric|min:111|max:9999',
            'homePhone' => 'numeric|min:111111|max:999999999',
            'education' => 'required|string',
            'ethnicGroup' => 'nullable|string',
            'workAddress' => 'nullable|string',
            'publiWorker' => 'string|max:2',
            'workInstitute' => 'nullable|string|max:50',
            'conmunity' => 'string|max:50',
            'finance' => 'string|max:2',
            'financeType' => 'string',
            'gender' => 'required',
            'cedula' => 'numeric|max:999999999',
        ];
    }
}
