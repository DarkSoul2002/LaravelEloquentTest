<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        // select * from users
        $users = User::all();

        return view('users.index')->with('users', $users);
    }

    public function store()
    {
        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->remember_token = Str::random(20);

        $user->save();

        return back();

    }
}
