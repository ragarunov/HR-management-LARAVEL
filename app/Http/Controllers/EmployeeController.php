<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $emps = Employee::get();
        return view('pages.emp.index', [
            'emps' => $emps,
        ]);
    }

    public function indexAdd()
    {
        $roles = Role::get();
        return view('pages.emp.add', [
            'roles' => $roles
        ]);
    }

    public function store(Request $req)
    {   
        $this->validate($req, [
            'firstName' => 'required',
            'lastName' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'role' => 'required',

        ]);
        Employee::create([
            'first_name' => $req->firstName,
            'last_name' => $req->lastName,
            'telephone' => $req->telephone,
            'email' => $req->email,
            'role_id' => $req->role,
        ]);

        return redirect()->route('emp');
    }

    public function edit(Employee $emp)
    {
        $roles = Role::get();
        return view('pages.emp.edit', [
            'emp' => $emp,
            'roles' => $roles,
        ]);
    }

    public function update(Employee $emp, Request $req)
    {
        $this->validate($req, [
            'firstName' => 'required',
            'lastName' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $emp->update([
            'first_name' => $req->firstName,
            'last_name' => $req->lastName,
            'telephone' => $req->telephone,
            'email' => $req->email,
            'role_id' => $req->role,
        ]);

        return redirect()->route('emp');
    }

    public function destroy(Employee $emp)
    {
        $emp->delete();

        return redirect()->route('emp');
    }
}
