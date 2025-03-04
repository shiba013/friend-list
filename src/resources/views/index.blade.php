@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="friend-list">
    <div class="mypage">
        <h2 class="mypage__title">マイページ</h2>
    </div>
    <div class="mypage__logo">
        <p class="mypage__logo-title">ようこそ{{ Auth::user()->name  }}さん</p>
    </div>
    <div class="friend-list__title">
        <h2 class="friend-list__title-logo">友達一覧</h2>
    </div>
    <div class="friend-table">
        <table class="friend-list">
            <tr class="friend-list__inner"></tr>
        </table>
    </div>
</div>
@endsection