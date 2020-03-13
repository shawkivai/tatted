<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ValidationController extends Controller
{
    public function emailValidation()
    {
        $customerEmails = Company::get(['email'])->toArray();
        // $emailTest = explode("@", $_POST['email']);
        $email['email']= $_POST['email'];
        if(in_array($email, $customerEmails))
        {
            return 'false';
        } else {
            return 'true';
        }
    }

    public function companyNameValidation()
    {
        $companies = Company::get(['name'])->toArray();
        $name['name']= $_POST['name'];
        if(in_array($name, $companies))
        {
            return 'false';
        } else {
            return 'true';
        }
    }

    public function passwordValidation()
    {
        $password['password'] = $_POST['password'];

        $rules = [
            'password'  => ['required',
                                'string',
                                'min:8',
                                'regex:/[a-z]/',
                                'regex:/[A-Z]/',
                                'regex:/[0-9]/'
                                ],
        ];

        $validation = \Validator::make($password, $rules);

        if($validation->fails())
        {
            return 'false';
        } else {
            return 'true';
        }
    }
}