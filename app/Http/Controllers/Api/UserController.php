<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show () {
        $CurrentUser = Auth::user();
        
        $user = User::where('id', $CurrentUser->id)->with('user_detail', 'specializations')->first();
        

        return response()->json([
            'status' => true,
            'user' => $user
        ]);
    }
}
