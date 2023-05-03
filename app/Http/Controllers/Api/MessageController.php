<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index() {
        $user = Auth::user();

        if ($user) {
            $messages = Message::where('user_id', $user->id)->get();
        }

        return response()->json([
            'status' => true,
            'messages' => $messages
        ]);
    }

    public function show($id) {
        $user = Auth::user();

        if ($user) {
            $message = Message::where('id', $id)->first();
        }

        return response()->json([
            'status' => true,
            'message' => $message
        ]);
    }
}
