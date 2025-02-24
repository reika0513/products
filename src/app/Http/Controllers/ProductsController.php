<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('index', ['products' => $products]);
    }

    public function register(){
        return view('register');
    }

    public function detail(){
        $products = Product::all();
        return view('detail', ['products' => $products]);
    }

    public function create(ProductsRequest $request){
        $products = $request->only('id', 'name', 'price', 'image','description');
        Product::create($products);
        return redirect('/products');
    }

    public function update(ProductsRequest $request){
        $products = $request->all();
        unset($products['_token']);
        Product::find($request->id)->update($products);
        return redirect('/products');
    }

    public function delete(Request $request)
    {
        Product::find($request->id)->delete();
        return redirect('/products');
    }

    public function search(Request $request){
        $products = Product::where('name', $request->input)->first();
        $input = [
            'input' => $request->input,
            'products' => $products
        ];
        return view('search', $input);
    }
}
