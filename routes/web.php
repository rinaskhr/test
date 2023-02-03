<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
Route::post('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/{id}/delete', [EmployeeController::class, 'delete'])->name('employee.delete');
Route::get('/getEmployee/{id}', [EmployeeController::class, 'getEmployee'])->name('employee.getEmployee');
