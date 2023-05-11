<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\New_;

class FeedbackController extends Controller
{
    public function index() {
        $user = Auth::user();
        $feedback = Feedback::where('user_id', $user->id)->orderBy('created_at', 'DESC')->paginate(10);

        return response()->json([
            'status' => true,
            'feedback' => $feedback
        ]);
    }

    public function show($id) {
        
        $feedback = Feedback::find($id);

        return response()->json([
            'status' => true,
            'feedback' => $feedback
        ]);
    }

    public function store(Request $request) {

        $user = Auth::user();
        $data = $request->all();

        $validator = Validator::make( $data, [
            'name' => ['required', 'max:100'],
            'vote' => ['numeric'],
            'feedback_description' => ['required'],
            'user_id' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $feedback = new Feedback();
        $feedback->name = $data['name'];
        $feedback->vote = $data['vote'];
        $feedback->feedback_description = $data['feedback_description'];
        $feedback->user_id = $data['user_id'];
        $feedback->save();

        return response()->json([
            'status' => true
        ]);
    }
}
