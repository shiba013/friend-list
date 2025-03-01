<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;
use App\Http\Requests\FriendRequest;

class FriendController extends Controller
{
    public function index() {
        $friends = Friend::all();
        $friends = Friend::Paginate(10);
        return view('index' ,compact('friends'));
    }

    public function store(FriendRequest $request) {
        $friend = $request->only(['name']);
        Friend::create($friend);
        return redirect('/')->with('message', 'fiendを作成しました');
    }

    public function update(FriendRequest $request) {
        $friend = $request->only(['name']);
        Friend::find($request->id)->update($friend);
        return redirect('/')->with('message', 'friendを更新しました');
    }

    public function destroy(Request $request) {
        Friend::find($request->id)->delete();
        return redirect('/')->with('message', 'Friendを削除しました');
    }
}
