<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function ViewEmployees(Request $request){
        $employees = Employee::orderby('id',"DESC")->get();
        return view("employee-page")
        ->with('employees', $employees);
    }

    public function AddEmployee(){
        return view('employee-add');
    }
    public function SaveEmployee(Request $request){
        Employee::create([
            'name'        => $request->name,
            'lastname'    => $request->lastname,
            'birthdate'   => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary'      => $request->salary
        ]);
        return redirect('/employee/all');
    }

    public function EditEmployee(Request $request, $id){
        $employee_to_edit = Employee::where('id', $id)->firstOrFail();
        return view('employee-edit')
        ->with('employee',$employee_to_edit);
    }

    public function DeleteEmployee(Request $request){
        Employee::where('id', $request->employee_id)->delete();
        return redirect()->back();
    }

    public function UpdateEmployee(Request $request){
        Employee::where('id',$request->employee_id)->update([
            'name'        => $request->name,
            'lastname'    => $request->lastname,
            'birthdate'   => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary'      => $request->salary,
            ]);
            return redirect('/employee/all');
    }
}
