<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function update($id, Request $request){
        $user = User::findOrFail($id);
        $password = Hash::make($request->input('password'));
        $user->password = $password;
        $user->save();
        return response($user);
    }
}
