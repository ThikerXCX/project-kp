<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        $cat = category::get();
        return view('admin.produk.product',compact('data','cat'));
    }
    public function store(ProductRequest $req)
    {
        // dd($req->except(['name']));  
    }
}
