<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\category;

class ProductAdminController extends Controller
{
    public function index()
    {
        $product = Product::all();
 
        return view('products.index', ['data' => $product]);
    }
 
    public function add()
    {
        $category = category::get();
     
        return view('products.form', ['category' => $category]);
    }
 
    public function save(Request $request)
    {
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'gallery' => $request->gallery,
        ];
 
        Product::create($data);
 
        return redirect()->route('products');
    }
 
    public function edit($id)
    {
        $product = Product::find($id);
        $category = category::get();
 
        return view('products.form', ['product' => $product, 'category' => $category]);
    }
 
    public function update($id, Request $request)
    {
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'gallery' => $request->gallery,

        ];
 
        Product::find($id)->update($data);
 
        return redirect()->route('products');
    }
 
    public function delete($id)
    {
        Product::find($id)->delete();
 
        return redirect()->route('products');
    }
}
