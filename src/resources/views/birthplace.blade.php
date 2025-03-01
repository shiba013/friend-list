<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>birthplace-list</title>
    @extends('layouts.app')

    @section('css')
    <link rel="stylesheet" href="{{ asset('css/birthplace.css') }}">
    @endsection

    @section('content')
    <div class="birthplace__alert">
        @if(session('message'))
        <div class="birthplace__alert--success">
            {{ session('message') }}
        </div>
        @endif

        @if($errors->any())
        <div class="birthplace__alert--danger">
            <ul>
                @foreach($errors->any() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="birthplace__content">
        <div class="birthplace__title">
            <h2 class="birthplace__logo">新規作成</h2>
        </div>

        <form action="/birthplaces/create" method="post" class="create-form">
            @csrf
            <div class="create-form__item">
                <input type="text" name="place-name" value="{{ old('place-name') }}" class="create-form__item-input">
                <select name="friend_id" class="create-form__item-select">
                    @foreach($friends as $friend)
                    <option value="{{ $friend['id'] }}">{{ $friend['name'] }}</option>
                </select>
            </div>
            <div class="create-form__button">
                <button type="submit" class="create-form__button-submit">作成</button>
            </div>
        </form>

        <div class="birthplace-table">
            <table class="birthplace-table__inner">
                <tr class="birthplace-table__row">
                    <th class="birthplace-table__logo">
                        <span class="birthplace-table__logo-span">出身地一覧</span>
                    </th>
                </tr>
                @foreach($birthplaces as $birthplace)
                <tr class="birthplace-table__row">
                    <td class="birthplace-table__item">
                        <form action="/birthplaces/update" method="post" class="update-form">
                            @method('patch')
                            @csrf
                            <div class="update-form__item">
                                <input type="text" name="place-name" value="{{ $birthplace['place-name'] }}" class="update-form__item-input">
                                <input type="hidden" name="id" value="{{ $birthplace['id'] }}">
                            </div>
                            <div class="update-form__button">
                                <button type="submit" class="update-form__button-submit">更新</button>
                            </div>
                        </form>
                    </td>
                    <td class="birthplace-table__item">
                        <form action="/birthplaces/delete" method="post" class="delete-form">
                            @method('delete')
                            @csrf
                            <div class="delete-form__button">
                                <button type="submit" class="delete-form__button-submit">削除</button>
                                <input type="hidden" name="id" value="{{ $birthplace['id'] }}">
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endsection
</head>
<body>
    
</body>
</html>