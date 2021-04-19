<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    public function index()
    {
        return view('companies.index', ['companies' => Company::orderBy('title')->get()]);
    }
    public function create()
    {
        return view('companies.create');
    }
    //What happens if company registrates without email?
    //Send email when company updates information?
    //Registration without logo- set default picture>
    //Refactor logic 
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'email' => 'nullable|email|unique:companies,email',
            'website' => 'nullable|url',
            'path' => 'nullable'
        ]);
        if ($request->hasFile('file')) {
            $request->file->store('product', 'public');
            $company = new Company([
                'title' => $request->get('title'),
                'email' => $request->get('email'),
                'website' => $request->get('website'),
                'path' => $request->file->hashName()
            ]);
            if($company['email']!= null){
                Mail::to($company['email'])->send(new WelcomeMail($company));
            }
            $company->save();
        } else {
            $company = new Company();
            $company->fill($request->all());
            if($company['email']!= null){
                Mail::to($company['email'])->send(new WelcomeMail($company));
            }
            $company->save();
        }

        return redirect()->route('companies.index')->with('status_success', 'New сompany was created');
    }
    public function edit(Company $company)
    {
        return view('companies.edit', ['company' => $company]);
    }
    public function update(Request $request, Company $company)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'email' => 'nullable|email|unique:users,email',
            'website' => 'nullable|url',
            'path' => 'nullable'
        ]);
        //Delete or save old LOGO if new one was choosen?
        $company->fill($request->all());
        if ($request->hasFile('file')) {
            $request->file->store('product', 'public');
            $company->path = $request->file->hashName();
        }
        $company->save();
        return redirect()->route('companies.index')->with('status_success', 'Company information was updated');
    }
    public function destroy(Company $company)
    {
        if (count($company->employees)) {
            return back()->withErrors(['error' => ['Can\'t delete a company with employees assigned, please unsign first!']]);
        }
        $company->delete();
        return redirect()->route('companies.index')->with('status_success', 'The company was deleted');
    }
}
