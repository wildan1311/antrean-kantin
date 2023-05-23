<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Throwable;

class LoginController extends Controller
{
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        try{
            $user = User::where([
                ["email", "=", $email],
            ])->first();

            if(!Hash::check($password, $user->password)){
                return response()->json([
                    "Message" => "Email or Password Cannot Found on Server"
                ], 400);
            }
        }catch(Throwable $e){
            return response()->json([
                "Message" => "Email or Password Cannot Found on Server"
            ], 400);
        }

        $token = $user->createToken('secret')->plainTextToken;

        return response()->json([
            "Message" => "Login Berhasil",
            "token" => $token
        ]);
    }
}
