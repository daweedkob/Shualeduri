<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function ViewCompanies(Request $request){
        $companies = Company::orderby('id',"DESC")->get();
        return view("company.company-page")
        ->with('companies', $companies);
    }

    public function AddCompany(){
        return view('company.company-add');
    }
    public function SaveCompany(Request $request){
        Company::create([
            'name'    => $request->name,
            'code'    => $request->code,
            'address' => $request->address,
            'city'    => $request->city,
            'country' => $request->country
        ]);
        return redirect('/company/all');
    }

    public function EditCompany(Request $request, $id){
        $company_to_edit = Company::where('id', $id)->firstOrFail();
        return view('company.company-edit')
        ->with('company',$company_to_edit);
    }

    public function DeleteCompany(Request $request){
        Company::where('id', $request->company_id)->delete();
        return redirect()->back();
    }

    public function UpdateCompany(Request $request){
        Company::where('id',$request->company_id)->update([
            'name'    => $request->name,
            'code'    => $request->code,
            'address' => $request->address,
            'city'    => $request->city,
            'country' => $request->country,
            ]);
            return redirect('/company/all');
    }
}
