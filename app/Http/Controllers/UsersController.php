<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

//        return $users;  --send the JSON file

        return view('users/index', compact('users'));
    }

    public function store()
    {
       $user = new User;
       $user->name = request('name');
       $user->save();

        return back();
    }

}
