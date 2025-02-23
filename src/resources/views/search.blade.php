@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/search.css') }}">
@endsection

@section('content')
<div class="products">
    <div class="products_heading">
        <h1 class="products_heading-logo">''の商品一覧</h1>
    </div>
    <div class="products_content">
        <div class="products_content-side">
            <form class="products_content_search" action="/products/search" method="post">
                @csrf
                <input class="products_content_search-input" type="text" name="search" placeholder="商品名で検索" value="{{ old('name') }}">
                <button class="products_content_search-button" type="submit" name="submit" >検索</search>
            </form>
        </div>
        @if (@isset($products))
        <div class="products_content-main">
            <div class="products_item">
                    <p class="products_item-image">{{$products['image']}}</p>
                    <div class="products_item-content">
                        <p class="products_item-name">{{$products['name']}}</p>                    
                        <p class="products_item-price">￥{{$products['price']}}</p>
                    </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection