<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'cedula' => 'required|numeric|max:9',
            'userName' => 'required|date|unique:beneficiaries',
            'password' => 'required|string|max:50',
            'email' => 'required|email|unique:beneficiaries',
            'rol' => 'required|string'
        ];
    }
}
