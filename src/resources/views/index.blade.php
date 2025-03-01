<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friend-list</title>
    @extends('layouts.app')

    @section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @endsection

    @section('content')
    <div class="friend__alert">
        @if(session('message'))
        <div class="friend__alert--success">
            {{ session('message') }}
        @endif
        </div>

        @if($errors->any())
        <div class="friend__alert--danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="friend__content">
            <div class="friend__title">
                <h2 class="friend__title-logo">新規作成</h2>
            </div>
            <form action="/friends" method="post" class="create-form">
                @csrf
                <div class="create-form__item">
                    <input type="text" name="name" value="{{ old('name') }}" class="create-form__item-input">
                </div>
                <div class="create-form__button">
                    <button type="submit" class="create-form__button-submit">作成</button>
                </div>
            </form>

            <div class="friend__title">
                <h2 class="friend__title-logo">Friend検索</h2>
            </div>
            <form action="/friends/search" method="get" class="search-form">
                @csrf
                <div class="search-form__item">
                    <input type="text" name="name" value="" class="search-form__item-input">
                    <select name="place-name" class="search-form__item-select">
                        <option value="">birthplace</option>
                    </select>
                </div>
                <div class="search-form__button">
                    <button type="submit" class="search-form__button-submit">検索</button>
                </div>
            </form>

            <div class="friend__table">
                <table class="friend-table__inner">
                    <tr class="friend-table__row">
                        <th class="friend-table__logo">
                            <span class="friend-table__logo-span">Friend名</span>
                        </th>
                    </tr>
                    @foreach($friends as $friend)
                    <tr class="friend-table__row">
                        <td class="friend-table__item">
                            <form action="/friends/update" method="post" class="update-form">
                                @method('patch')
                                @csrf
                                <div class="update-form__item">
                                    <input type="text" name="name" value="{{ $friend['name'] }}" class="update-form__item-input">
                                    <input type="hidden" name="id" value="{{ $friend['id'] }}">
                                    <input type="text" name="place-name" value="" class="update-form__item-input">
                                    <input type="hidden" name="id" value="">
                                </div>
                                <div class="update-form__button">
                                    <button type="submit" class="update-form__button-submit">更新</button>
                                </div>
                            </form>
                        </td>
                        <td class="friend-table__item">
                            <form action="/friends/delete" method="post" class="delete-form">
                                @method('delete')
                                @csrf
                                <div class="delete-form__button">
                                    <button type="submit" class="delete-form__button-submit">削除</button>
                                    <input type="hidden" name="id" value="{{ $friend['id'] }}">
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $friends->links() }}
            </div>
        </div>
    @endsection
    </div>
</head>
<body>
    
</body>
</html>