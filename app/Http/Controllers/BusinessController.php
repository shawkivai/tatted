<?php

namespace App\Http\Controllers;

class BusinessController extends Controller
{
    public function index()
    {
        return view('pages.business.registration');
    }

    public function login()
    {
        return view('pages.business.login');
    }
}