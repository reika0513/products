<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(Request $request){
        $products=Products::all();
        return view('index', compact('products'));
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $product = $request->only(['name', 'price', 'image', 'content']);
        Products::create($product);
        return view('index');
    }
}
