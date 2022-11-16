<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = category::all();
        return view('admin.category',compact('data'));
    }
    public function destroy($id)
    {
        Category::where('id',$id)->delete();
        return redirect()->back()->with('success','data berhasil dihapus');
    }
}
