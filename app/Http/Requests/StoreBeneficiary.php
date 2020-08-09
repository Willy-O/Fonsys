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
            'cellphone' => 'required|numeric|min:10|max:11',
            'homePhone' => 'numeric|min:10|max:11',
            'education' => 'required|string',
            'ethnicGroup' => 'required|string',
            'workAddress' => 'nullable|string',
            'publiWorker' => 'boolean',
            'workInstitute' => 'nullable|string|max:50',
            'conmunity' => 'string|max:50',
            'finance' => 'boolean',
            'financeType' => 'string',
            'gender' => 'min:1|max:1',
            'cedula' => 'numeric|max:9',
        ];
    }
}
