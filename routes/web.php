<?php

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

Route::get('/employee/all',"EmployeeController@ViewEmployees")->name('employee.all');
Route::get('/employee/add',"EmployeeController@AddEmployee")->name('employee.add');
Route::post('/employee/save',"EmployeeController@SaveEmployee")->name('employee.save');
Route::post('/employee/delete',"EmployeeController@DeleteEmployee")->name('employee.delete');
Route::post('/employee/update',"EmployeeController@UpdateEmployee")->name('employee.update');
Route::get('/employee/edit/{id}',"EmployeeController@EditEmployee")->name("employee.edit");

Route::get('/company/all',"CompanyController@ViewCompanies")->name('company.all');
Route::get('/company/add',"CompanyController@AddCompany")->name('company.add');
Route::post('/company/save',"CompanyController@SaveCompany")->name('company.save');
Route::post('/company/delete',"CompanyController@DeleteCompany")->name('company.delete');
Route::post('/company/update',"CompanyController@UpdateCompany")->name('company.update');
Route::get('/company/edit/{id}',"CompanyController@EditCompany")->name("company.edit");
