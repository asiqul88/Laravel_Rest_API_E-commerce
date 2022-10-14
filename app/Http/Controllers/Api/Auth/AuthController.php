<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){

        return response()->json([
            'message' =>'unauthenticated'
        ],401);

    }

    public function login(Request $request){

        $validate = Validator::make($request->all(),[
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'errors' => $validate->errors()
            ],422);
        }

        $reg_data = $request->only('email','password');

        if (Auth::attempt($reg_data)) {
            $user = Auth::user();
            $data['token_type'] = 'Bearer';
            $data['access_token'] = $user->createToken('userToken')->accessToken;
            $data['user'] = $user; 
            return response()->json($data,200);

        }else {
            return response()->json([
                'loginFailed' => 'Email or Password Incorrect'
            ],401);
        }
        
    }

    public function register(Request $request){

        $validate = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'errors' => $validate->errors()
            ],422);
        }

        $req_data = $request->only('first_name','last_name','email','password');
        $req_data['password'] = Hash::make($request->password);

            $user = User::create($req_data);
            Auth::login($user);
            $data['token_type'] = 'Bearer';
            $data['access_token'] = $user->createToken('userToken')->accessToken;
            $data['user'] = $user; 
            
            return response()->json($data,200);
        
    }

    public function logout(Request $request){

        Auth::user()->token()->revoke();
        return response()->json([
            'message' => 'You are successfully logout'
        ]);
    }
}
