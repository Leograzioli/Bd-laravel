<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    //to register user 
    public function create(Request $request)
    {

        $validatedUser = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'specialization' => 'required',
            'password' => 'required|confirmed',
        ]);

        if ($validatedUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validatedUser->errors()
            ], 401);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->specializations()->attach($request->specialization);

        return response()->json([
            'status' => true,
            'message' => 'user created successfully',
            'user' => $user,
            'token' => $user->createToken('API TOKEN')->plainTextToken
        ], 200);
    }

    //to log in user
    public function login(Request $request)
    {

        $validatedUser = Validator::make($request->all(), [
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required',
        ]);

        if ($validatedUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validatedUser->errors()
            ], 401);
        }

        if (!Auth::attempt($request->only(['email', 'password'], /* true to save a remember-me coockie*/))) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => [
                    'password' => ['the password is incorrect' ]
                ]
            ], 401);
        }

        $user = User::where('email', $request->email)->first();

        return response()->json([
            'status' => true,
            'user' => $user,
            'message' => 'user logged in successfully',
            'token' => $user->createToken('API TOKEN')->plainTextToken
        ], 200);
    }

    public function logout()
    {
        $user = Auth::user();
        $user->tokens()->delete();
        return response()->json([
            'status' => true,
            'message' => 'user logged out'
        ]);
    }
}
