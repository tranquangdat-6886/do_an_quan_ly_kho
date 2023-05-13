<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index(){
        return view('backend.warehouses.list_warehouse');
    }
    public function create(){
        return view('backend.warehouses.add_warehouse');
    }
}