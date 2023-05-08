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
        try {
            $validatedUser = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
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

            return response()->json([
                'status' => true,
                'message' => 'user created successfully',
                'user' => $user,
                'token' => $user->createToken('API TOKEN')->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    //to log in user
    public function login(Request $request)
    {
        try {
            $validatedUser = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);

            if ($validatedUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'error' => $validatedUser->errors()
                ], 401);
            }

            if(!Auth::attempt($request->only(['email', 'password'], /* true to save a remember-me coockie*/))) {
                return response()->json([
                    'status' => false,
                    'message' => 'email and password does not match'
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'user' => $user,
                'message' => 'user logged in successfully',
                'token' => $user->createToken('API TOKEN')->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function logout() {
        $user = Auth::user();
        $user->tokens()->delete();
        return response()->json([
            'status' => true,
            'message' => 'user logged out'
        ]);
    }
}
