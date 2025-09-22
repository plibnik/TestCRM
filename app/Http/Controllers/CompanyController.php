<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
//        dd (compact('companies'));
        return view('companies.index', compact('companies'));


    }

    public function create()
    {
        return view('companies.create');
    }

    public function show (Company $company)
    {
        return view ('companies.show', compact('company'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company')); // so we pass current company data to the blade
    }

    public function update(Request $request, Company $company)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $company->update($validatedData);
        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        // WELL HERE I WOULD ADD THAT IF ANY CUSTOMERS ARE STILL USING IT... or DB would prohibit deletion on hanging foreign key
        if (Customer::where('company_id',$company->id)->count()>0 ) dd ('unable to');
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
