<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public function home(){
    //     $products = Product::all();
    //     return view('home', ['products' => $products]);
    // }

    public function create(){
        
        return view('create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',
        ]);

        $newProduct = Product::create($data);

        return redirect(route('dashboard'));

    }

    public function edit(Product $product){
        return view('edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            
        ]);

        $product->update($data);

        return redirect(route('dashboard'))->with('success', 'Product Updated Succesffully');

    }

    public function delete(Product $product){
        $product->delete();
        return redirect(route('dashboard'))->with('success', 'Product deleted Succesffully');
    }
}
