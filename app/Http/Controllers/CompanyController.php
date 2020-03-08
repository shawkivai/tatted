<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    private $companyModel;
    
    public function __construct(Company $company)
    {
        $this->companyModel = new Repository($company);
    }
    public function index()
    {

    }

    public function store(CompanyRequest $request)
    {
        $companyData =  $this->companyModel->create($request->only($this->companyModel->getModel()->fillable));

        if($companyData) {
            return redirect(route('business.register'));
        }
        // return redirect(route('business.register'))->withErrors($request);
    }
}
