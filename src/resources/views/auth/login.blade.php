@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
    <div class="login__content-header">
        <h2>ログイン</h2>
    </div>

    <form action="/login" method="post" class="login-form">
    @csrf
        <div class="login-form__item">
            <div class="login-form__title">
                <span class="login-form__title-span">メールアドレス</span>
            </div>
            <div class="login-form__content">
                <input type="email" name="email" value="{{ old('email') }}" class="login-form__content-input">
            </div>
            <div class="form__alert">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="login-form__item">
            <div class="login-form__title">
                <span class="login-form__title-span">パスワード</span>
            </div>
            <div class="login-form__content">
                <input type="password" name="password" value="{{ old('password') }}" class="login-form__content-input">
            </div>
            <div class="form__alert">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="login-form__button">
            <button type="submit" class="login-form__button-submit">ログイン</button>
        </div>
    </form>
    <div class="register__link">
        <a href="/register" class="register__link-submit">新規会員登録の方はこちら</a>
    </div>
</div>
@endsection