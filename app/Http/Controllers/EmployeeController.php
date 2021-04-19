<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller{

    public function index(Request $request){
        if(isset($request->company_id) && $request->company_id !== 0)
            $employees = \App\Models\Employee::where('company_id', $request->company_id)->orderBy('name')->get();
        else
            $employees = \App\Models\Employee::orderBy('name')->get();
        $companies = \App\Models\Company::orderBy('title')->get();
        return view('employees.index', ['employees' => $employees, 'companies' => $companies]);
    }
    public function create(){
        $companies = \App\Models\Company::orderBy('title')->get();
        return view('employees.create', ['companies' => $companies]);
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'nullable|email|unique:users,email',
            'phone' => 'nullable|regex:/(3706)[0-9]{7}/',
            'company_id' => 'required'
        ]);
        $employee = new Employee();
        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employees.index')->with('status_success' ,'New Employee was created');;
    }
    public function show(Employee $employee){
        //
    }

    public function edit(Employee $employee){
        $companies = \App\Models\Company::orderBy('title')->get();
        return view('employees.edit', ['employee' => $employee, 'companies' => $companies]);
    }
    public function update(Request $request, Employee $employee){
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'nullable|email|unique:employees,email',
            'phone' => 'nullable|regex:/(3706)[0-9]{7}/',
            'company_id' => 'required'
        ]);
        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employees.index')->with('status_success' ,'Employee information was updated');;
    }
    public function destroy(Employee $employee, Request $request)
    {
        $employee->delete();
        return redirect()->route('employees.index', ['companies_id'=> $request->input('company_id')])->with('status_success' ,'Employee was deleted');;
    }
}

