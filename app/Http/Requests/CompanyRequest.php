<?php

namespace App\Http\Requests;

use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name'          => 'required|string',
            'email'         => 'required|string|unique:companies',
            'password'      => ['required',
                                'string',
                                'min:8',
                                'regex:/[a-z]/',
                                'regex:/[A-Z]/',
                                'regex:/[0-9]/'
                                ],
            'address'       => 'string',
            'state_id'      => 'required|numeric',
            'postcode_id'   => 'required|numeric',
            'suburb_id'     => 'required|numeric',
            'service_type'  => 'string',
            'phone_no'      => 'string',
        ];
    }
}
