<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('index', ['products' => $products]);
    }

    public function register(){
        return view('register');
    }

    public function detail(){
        return view('detail');
    }

    public function create(ProductsRequest $request){
        $products = $request->only('name', 'price', 'image','description');
        Products::create($products);
        return redirect('/products');
    }

    public function search(Request $request){
        $products = Products::where('name', $request->input)->first();
        $input = [
            'input' => $request->input,
            'products' => $products
        ];
        return view('search', $input);
    }
}
