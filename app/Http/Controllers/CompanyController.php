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
        try {
            $companyData =  $this->companyModel->create($request->only($this->companyModel->getModel()->fillable));

            if($companyData) {
                return redirect()->route('business.login')->with('message', 'Successfully Registered');
            }

            }catch (\Exception $exception) {
                return response()->json([
                    'status'  => 'Error',
                    'message' => $exception->getMessage()
                ], 500);
        }
    }
}
