@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="products">
    <div class="products_heading">
        <h1 class="products_heading-logo">商品一覧</h1>
        <button class="products_heading_add">
        <a class="products_heading_add-logo" href="/products/register">+ 商品追加</a>
        </button>
    </div>
    <div class="products_content">
        <div class="products_content-side">
                <form class="products_content_search" action="/products/search" method="post">
                    @csrf
                    <input class="products_content_search-input" type="text" name="search" placeholder="商品名で検索">
                    <button class="products_content_search-button" type="submit" name="submit" >検索</button>
                </form>
        </div>
        <div class="products_content-main">
            @foreach($products as $products)
            <a class="products_heading_update" href="/products/{productId}">
                <div class="products_item">
                    <input type="hidden" id="id" value="{{$products['id']}}">
                    <img class="products_item-image" src="{{$products['image']}}" alt="画像なし">
                    <div class="products_item-content">
                        <p class="products_item-name">{{$products['name']}}</p>                    
                        <p class="products_item-price">￥{{$products['price']}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection