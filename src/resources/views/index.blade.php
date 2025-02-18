@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="products">
    <div class="products_heading">
        <h1 class="products_heading-logo">商品一覧</h1>
        <a class="products_heading-add" href="/products/register">+ 商品追加</a>
    </div>
    <div class="products_content">
        <div class="products_content-side">
                <form class="products_content_search" action="/products" method="get">
                    <input class="products_content_search-input" type="search" name="search" placeholder="商品名で検索">
                    <input class="products_content_search-button" type="submit" name="submit" value="検索">
                </form>
                <!-- 並び替えボタンの設置 -->
        </div>
        <div class="products_content-main">
            
        </div>
    </div>
</div>
@endsection