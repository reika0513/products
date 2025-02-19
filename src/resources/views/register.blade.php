@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="products_register">
    <div class="products_heading">
        <h1 class="products_heading-logo">商品登録</h1>
    </div>
    <form class="form" action="/products" method="post">
        @csrf
        <div class="form_frame">
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label--item">商品名</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text_name" type="text" name="name" placeholder="商品名を入力" value="{{ old('name') }}">
                    </div>
                    <div class="form_error">
                        <!-- バリテーション挿入-->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label--item">値段</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text_price" type="text" name="price" placeholder="値段を入力" value="{{ old('price') }}">
                    </div>
                    <div class="form_error">
                        <!-- バリテーション挿入-->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label--item">商品画像</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <!-- 商品画像挿入ボタン -->
                    </div>
                    <div class="form_error">
                        <!-- バリテーション挿入-->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label--item">季節</span>
                    <span class="form__label--required">必須</span>
                    <span class="form__label--message">複数選択可</span>
                </div>
                <div class="form_group-content">
                    <div class="form_group-text_seasons">
                        <input type="radio" name="season" value="1">
                            <label class="form_group-text_seasons-label" for="spring" name="season" value="春">春</label>
                            <input type="radio" name="season" value="2">
                            <label class="form_group-text_seasons-label" for="summer" name="season" value="夏">夏</label>
                            <input type="radio" name="season" value="3">
                            <label class="form_group-text_seasons-label" for="fall" name="season" value="秋">秋</label> 
                            <input type="radio" name="season" value="4">
                            <label class="form_group-text_seasons-label" for="winter" name="season" value="冬">冬</label>      
                    </div>
                    <div class="form_error">
                        <!-- バリテーション挿入-->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label--item">商品説明</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <textarea class="form_group-text_content" name="content" cols="80" rows="6" placeholder="商品説明を入力">{{ old('content') }}</textarea>
                    </div>
                    <div class="form_error">
                        <!-- バリテーション挿入-->
                    </div>
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form__button-back" type="button" onClick="history.back()">戻る</button>
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection