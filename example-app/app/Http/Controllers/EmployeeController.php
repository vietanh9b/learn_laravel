<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees=Employee::all();
        // dd($employees::items);
        return view('home',[
            'employees'=>$employees
        ]);
    }
    // create
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $data=$request->validate([
            'name'=>['required','min:8','max:255'],
            'pass'=>['required','min:8','max:255']
        ]);
        Employee::create($data);
        return $this->index();
    }
    // edit
    public function edit(Employee $employee){
        // dd($employee);
        // echo $employee->pass;
        return view('edit',['employee'=>$employee]);
    }
    public function storeEdit(Employee $employee,Request $request){
        $data=$request->validate([
            'name'=>['required','min:8','max:255'],
            'pass'=>['required','min:8','max:255']
        ]);
        echo 1;
        $employee->update($data);
        
        // return $this->index();
    }
    // delete
}
