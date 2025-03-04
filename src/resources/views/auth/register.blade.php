@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="register__content-header">
        <h2>新規会員登録</h2>
    </div>

    <form action="/register" method="post" class="register-form">
        @csrf
        <div class="register-form__item">
            <div class="register-form__title">
                <span class="register-form__title-span">ユーザ名</span>
            </div>
            <div class="register-form__content">
                <input type="text" name="name" value="{{ old('name') }}" class="register-form__content-input">
            </div>
            <div class="form__alert">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="register-form__item">
            <div class="register-form__title">
                <span class="register-form__title-span">メールアドレス</span>
            </div>
            <div class="register-form__content">
                <input type="email" name="email" value="{{ old('email') }}" class="register-form__content-input">
            </div>
            <div class="form__alert">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="register-form__item">
            <div class="register-form__title">
                <span class="register-form__title-span">パスワード</span>
            </div>
            <div class="register-form__content">
                <input type="password" name="password" value="{{ old('password') }}" class="register-form__content-input">
            </div>
            <div class="form__alert">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="register-form__item">
            <div class="register-form__title">
                <span class="register-form__title-span">確認用パスワード</span>
            </div>
            <div class="register-form__content">
                <input type="password" name="password_confirmation" class="register-form__content-input">
            </div>
        </div>
        <div class="register-form__button">
            <button type="submit" class="register-form__button-submit">
                <a href="/thanks"></a>登録</button>
        </div>
    </form>

    <div class="login__link">
        <a href="/login" class="login__link-submit">ログインの方はこちら</a>
    </div>
</div>
@endsection