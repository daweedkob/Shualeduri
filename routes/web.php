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

Route::get('/employee/all',"EmployeeController@ViewEmployees");
Route::get('/employee/add',"EmployeeController@AddEmployee");
Route::post('/employee/save',"EmployeeController@SaveEmployee");
Route::post('/employee/delete',"EmployeeController@DeleteEmployee");
Route::post('/employee/update',"EmployeeController@UpdateEmployee");
Route::get('/employee/edit/{id}',"EmployeeController@EditEmployee")->name("employee.edit");

Route::get('/company/all',"CompanyController@ViewCompanies");
Route::get('/company/add',"CompanyController@AddCompany");
Route::post('/company/save',"CompanyController@SaveCompany");
Route::post('/company/delete',"CompanyController@DeleteCompany");
Route::post('/company/update',"CompanyController@UpdateCompany");
Route::get('/company/edit/{id}',"CompanyController@EditCompany")->name("company.edit");
