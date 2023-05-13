<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view("backend.employees.list_employee");
    }
    public function create()
    {
        return view("backend.employees.add_employees");
    }
}