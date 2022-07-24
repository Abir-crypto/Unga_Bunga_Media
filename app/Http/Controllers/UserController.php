<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers(){
        return User::all();
    }
    public function getUser(User $user){
        return $user;
    }

    public function createUser(Request $request){
        $user = User::create($request->only(['first_name', 'last_name', 'username', 'email', 'password'])) ?: "not created";
        return $user;
    }
}
