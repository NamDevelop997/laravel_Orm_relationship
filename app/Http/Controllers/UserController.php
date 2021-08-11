<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function add()
    {
        User::create([
            'name' => 'mavanfdaf',
            'email' => 'dsfdsfds3@example.com',
            'password' => 'fdfdfewr3',
            // 'user_id' => 1
        ]);
    }

    function read() {
        return User::find(2)->post()->count();
    }
}
