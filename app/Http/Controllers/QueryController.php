<?php

namespace EloquentORM\Http\Controllers;

use Illuminate\Http\Request;

use EloquentORM\User;

class QueryController extends Controller
{
    public function eloquentAll(){
        $users = User::all();
        $title = "Todos los usuarios";
        return view('query.methods', compact('title','users'));
    }

    public function eloquentGet($gender){
        $users = User::where('gender', $gender)->get();
        $title = "Todos los usuarios (GET)";
        return view('query.methods', compact('title','users'));
    }

    public function eloquentGetCustom(){
        $users = User::where('gender', 'f')->get(['id', 'name', 'biography']);
        $title = "Todos los usuarios (GET Curtom - con array)";
        return view('query.methods', compact('title','users'));
    }

    public function eloquentDelete($id){
        $user = User::find($id);
        $user->delete();
        return view('pages.delete');
    }

    public function eloquentLists(){
        $users = User::orderBy('name', 'ASC')
                ->pluck('name', 'id');
        return view('pages.lists', compact('users'));
    }

    public function eloquentFirstLast(){
        $first = User::first();
        $all = User::all();
        $last = $all->last();
        return view('query.first-last', compact('first', 'last'));
    }

    public function eloquentPaginate(){
        $users = User::orderBy('id', 'desc')->paginate();
        return view('query.paginate', compact('users'));
    }

}







