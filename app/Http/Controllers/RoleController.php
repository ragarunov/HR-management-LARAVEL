<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;

Use Exception;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy('created_at','DESC')->get();
        return view('pages.roles.index', [
            'roles' => $roles
        ]);
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'roleName' => 'required|unique:roles,name',
            'roleDesc' => 'required'
        ]);

        Role::create([
            'name' => $req->roleName,
            'description' => $req->roleDesc
        ]);

        return redirect()->route('roles');
    }

    public function edit(Role $role)
    {
        return view('pages.roles.edit', [
            'role' => $role
        ]);
    }

    public function update(Role $role, Request $req)
    {
        $this->validate($req, [
            'roleName' => 'required|unique:roles,name,'.$role->id,
            'roleDesc' => 'required'
        ]);

        $role->update([
            'name' => $req->roleName,
            'description' => $req->roleDesc
        ]);

        return redirect()->route('roles');
    }

    public function destroy(Role $role)
    {
        try {
            if (($role->id == 1 && $role->name == "Unassigned") || $role->name == "Unassigned") {
                throw new Exception(
                    "Unassigned Role is a default role. You cannot delete it"
                );
            }
            $unassigned = Role::where('name', 'Unassigned')->get();
            $emps = Employee::where('role_id', $role->id)->get();
            foreach ($emps as $emp) {
                $emp->update([
                    'role_id' => $unassigned[0]->id,
                ]);
            }
            $role->delete();
        } catch(Exception $e) {
            return $e->getMessage();
            // return response('Cannot excecute query {$e->getMessage()}', 200);
              // TODO - Work on better error handling 
              // (custom message and redirection?)
        };
        
        return redirect()->route('roles');
    }
}
