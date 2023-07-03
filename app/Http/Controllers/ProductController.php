<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function read() {
        $products = Product::all();

        return view('welcome', ['products' => $products]);
    }

    function showCreate() {
        return view('createProduct');       
    }

    function create(Request $req) {

        $validated = $req->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $req->file('image');

        $product = new Product;
        $product->image = $image->getClientOriginalName();
        $product->productName = $validated['name'];
        $product->price = $validated['price'];
        $product->save();

        $image->move(public_path('productImages'), $image->getClientOriginalName());

        $req->session()->flash('success', 'Product Created Successfully!');
        return redirect('/');
    }

}
