<?php

namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectData extends FormRequest
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
            'tittle' => 'required|min:3|max:50|string',
            'sum' => 'required|min:1|numeric',
            'objective' => 'required|min:5|string',
            'addressLocation' => 'min:10|string',
            'area' => 'required|max:50|string',
            'justification' => 'min:5|string',
            'countPoint' => 'required|string',
            'beneficiary_id' => 'required|min:1|numeric'
        ];
    }
}
