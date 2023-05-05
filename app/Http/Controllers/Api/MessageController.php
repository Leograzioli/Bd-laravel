<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $messages = Message::where('user_id', $user->id)->paginate(10);

        return response()->json([
            'status' => true,
            'messages' => $messages
        ]);
    }

    public function show($id)
    {
        $message = Message::find($id);

        return response()->json([
            'status' => true,
            'message' => $message
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => ['required'],
            'accountholder' => ['required', 'email', 'max:150'],
            'message' => ['required'],
            'user_id' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        // $message = new Message();
        // $message->fill($data);
        // $message->save();

        // $message = new Message();
        // $message->name = $data['name'];
        // $message->accountholder = $data['accountholder'];
        // $message->message = $data['message'];
        // $message->user_id = $data['user_id'];
        // $message->save();

        $message = new Message();
        $message->create($data);

        return response()->json([
            'success' => true
        ]);
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        if ($message) {

            $message->delete();

            return response()->json([
                'status' => true,
                'message' => 'message deleted',
                'test' => $message
            ]);

        } else {
            
            return response()->json([
                'status' => false,
            ]);
        }
    }
}
