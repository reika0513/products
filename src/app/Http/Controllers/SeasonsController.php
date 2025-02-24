<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Models\Season;

class SeasonsController extends Controller
{
    public function detail(){
        $Season = Season::all();
        return view('detail', ['Season' => $Season]);
    }

    public function create(ProductsRequest $request){
        $seasons = $request->only('id', 'name');
        Season::create($seasons);
        return redirect('/products');
    }

    public function update(ProductsRequest $request){
        $seasons = $request->only('id', 'name');
        unset($seasons['_token']);
        Season::find($request->id)->update($seasons);
        return redirect('/products');
    }

    public function delete(Request $request)
    {
        Season::find($request->id)->delete();
        return redirect('/products');
    }
}
