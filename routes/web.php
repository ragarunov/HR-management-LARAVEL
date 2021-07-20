<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;

// Main
Route::get('/', function () {
    return view('index');
});

// v ---------- Tree Screen ---------- v
Route::get('/tree', function () {
    return view('tree');
});
// ^ ---------- Tree Screen ---------- ^

// v ---------- Employee Screen ---------- v
Route::get('/emp', [EmployeeController::class, 'index'])->name('emp');

// Create
Route::get('/emp/add', [EmployeeController::class, 'indexAdd'])->name('emp.add');
Route::post('/emp/add', [EmployeeController::class, 'store']);

// Edit
Route::get('/emp/{emp}/edit', [EmployeeController::class, 'edit'])->name('emp.edit');
Route::patch('/emp/{emp}', [EmployeeController::class, 'update'])->name('emp.update');


// Delete
Route::delete('/emp/{emp}', [EmployeeController::class, 'destroy'])->name('emp.destroy');

// ^ ---------- Employee Screen ---------- ^

// v ---------- Roles Screen ---------- v
Route::get('/roles', [RoleController::class, 'index'])->name('roles');

// Create
Route::get('/roles/add', function () {
    return view('pages.roles.add');
});
Route::post('/roles/add', [RoleController::class, 'store']);

// Edit
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::patch('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');

// Delete
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
// ^ ---------- Roles Screen ---------- ^

// v ---------- Work Screen ---------- v
Route::get('/work', function () {
    return view('pages.work');
});
// ^ ---------- Work Screen ---------- ^

// v ---------- Contact Screen ---------- v
Route::get('/contact', function () {
    return view('pages.contact');
});
// ^ ---------- Contact Screen ---------- ^