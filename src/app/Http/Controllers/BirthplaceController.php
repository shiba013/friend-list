<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Birthplace;
use App\Http\Requests\BirthplaceRequest;
use App\Models\Friend;

class BirthplaceController extends Controller
{
    public function index() {
        $birthplaces = Birthplace::Paginate(10);
        //$friends = Friend::with('friend')->get();
        $birthplaces = Birthplace::all();
        return view('/birthplace', compact('birthplaces',));
    }

    public function store(BirthplaceRequest $request) {
        $birthplace = $request->only(['place-name','friend_id']);
        Birthplace::create($birthplace);
        return redirect('/birthplace')->with('message', '出身地を作成しました');
    }

    public function update(BirthplaceRequest $request) {
        $birthplace = $request->only(['place-name']);
        Birthplace::find($request->id)->update($birthplace);
        return redirect('/birthplace')->with('message', '出身地を更新しました');
    }

    public function destroy(Request $request) {
        $birthplace = $request->only(['place-name']);
        Birthplace::find($request->id)->delete();
        return redirect('/birthplace')->with('message', '出身地を削除しました');
    }
}
