<?php

namespace EloquentORM\Http\Controllers;

use Illuminate\Http\Request;

use EloquentORM\User;

class PagesController extends Controller
{
    public function home(){
        $users = User::orderBy('id', 'dec')
        ->take(10)
        ->get();
        return view('pages.home', compact('users'));
    }
}
