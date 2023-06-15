<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class LoginController extends Controller
{
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        try{
            $user = User::with(['role'])->where([
                ["email", "=", $email],
            ])->first();

            throw_if(!$user);

            if(!Hash::check($password, $user->password)){
                return response()->json([
                    "Message" => "Email or Password Cannot Found on Server"
                ], 400);
            }
        }catch(Throwable $e){
            // print($e);
            return response()->json([
                "Message" => "Email or Password Cannot Found on Server"
            ], 400);
        }

        $token = $user->createToken('secret')->plainTextToken;

        return response()->json([
            "Message" => "Login Berhasil",
            "data" => $user,
            "token" => $token
        ]);
    }

    function errorLogin(){
        return response()->json([
            "status" => "failed",
            "Message" => "you have not logged in",
            ], 400);
    }

    function logout(Request $request){
        $user = User::findOrFail($request->id);
        $user->tokens()->delete();
        return response()->json([
            "status" => "success",
            "Message" => "you have logged out",
            ], 200);
    }
}
