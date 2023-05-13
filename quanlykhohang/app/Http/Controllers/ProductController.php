<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
   {
      return view('backend.products.list_product');
   }
   public function create()
   {
      return view('backend.products.add_product');
   }
}
