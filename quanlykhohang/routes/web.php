<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', 'AdminController@index')->name('dashboard');
Route::get('/admin/products', 'ProductController@index')->name('product.index');
Route::get('/admin/products/create', 'ProductController@create')->name('product.create');
Route::get('/admin/warehouses', 'WarehouseController@index')->name('warehouse.index');
Route::get('/admin/warehouses/create', 'WarehouseController@create')->name('warehouse.create');
Route::get('/admin/employees', 'EmployeeController@index')->name('employee.index');
Route::get('/admin/employees/create', 'EmployeeController@create')->name('employee.create');
Route::get('/admin/export', 'ExportController@index')->name('export.index');
Route::get('/admin/export/create', 'ExportController@create')->name('export.create');
