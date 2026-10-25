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

    <div class="create__friends">
        <div class="create__friends-title">
            <h2 class="create__friends-title--logo">friend-list作成</h2>
        </div>
        <form action="/create" method="get" class="create-form">
            <button type="submit" class="create-form__button">作成</button>
        </form>
    </div>

    <div class="friend-list__title">
        <span class="friend-list__title-span">friend検索</span>
    </div>
    <form action="/search" method="post" class="search-form">
        <div class="search-form__item">
            <input type="text" name="" value="" class="search-form__item-input">
        </div>
        <div class="search-form__button">
            <button type="submit" class="search-form__button-submit">検索</button>
        </div>
    </form>

    <div class="friend-table">
        <table class="friend-list">
            <tr class="friend-list__row">
                <th class="friend-list__header">
                    <span class="friend-list__header-span">friend名</span>
                </th>
            </tr>
            <tr class="friend-list__row">
                <td class="friend-list__item">
                    <input type="text" name="name" value="" class="friend-list__item-input">
                </td>
                <td class="friend-list__button">
                    <form action="/detail" method="get">
                        <button type="submit" class="friend-list__button-detail">詳細</button>
                    </form>
                </td>
                <td class="friend-list__button">
                    <form action="/edit" method="get">
                        <button type="submit" class="friend-list__button-update">編集</button>
                    </form>
                </td>
                <td class="friend-list__button">
                    <form action="/delete" method="get">
                        <button type="submit" class="friend-list__button-delete">削除</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection