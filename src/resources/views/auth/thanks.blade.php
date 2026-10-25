@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__content-header">
        <h2>会員登録が完了しました</h2>
    </div>
    <div class="login__link">
        <a href="/login" class="login__link-submit">ログインの方はこちら</a>
    </div>
</div>
@endsection