<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $data = [];
        return view('admin.brand.index',compact('data'));
    }
}