<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(){
        return view('index');
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $products = $request->only(['name', 'price', 'image', 'description']);
        Products::create($products);
        return view('index');
    }
}
