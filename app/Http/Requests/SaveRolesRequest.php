<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveRolesRequest extends FormRequest
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
        if ($this->method() !== 'POST') {
            $rules['display_name']=  'required';
        } else {
            $rules=  [
                'display_name' => 'required',
                'name' => 'required|unique:roles,display_name'
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo IDENTIFICADOR no puede estar vacio',
            'display_name.required' => 'El campo NOMBRE no puede estar vacio'
        ];
    }
}
