<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\EmployeeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'telephone',
        'email',
        'role_id',
    ];

    // Get the role associated with the employee
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
