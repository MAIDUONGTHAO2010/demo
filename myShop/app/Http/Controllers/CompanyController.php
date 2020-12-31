<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Company;
class CompanyController extends Controller
{
    //
    public function getCompanies()
    {
        return Company::all();
    }
    public function getCompanyById(Request $request)
    {
        return Company::with('shops')->find(1);
    }
    public function createCompany(Request $request)
    {
        return Company::create( $request->all());
    }
    public function deleteCompanyById(Request $request)
    {
        $company = $request->all();
        $result = Company::find( $company['id']); 
        return $result->delete();
    }
}
