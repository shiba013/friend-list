<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function detail() {
        return view('detail');
    }

    public function edit() {
        return view('edit');
    }

    public function delete() {
        return view('delete');
    }
}
