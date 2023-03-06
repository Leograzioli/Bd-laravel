<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorsListController extends Controller
{
    public function index(Request $request)
    {
        $spec = $request->spec;
        $vote = $request->vote;
    
        $doctorsList = User::with('user_detail', 'specializations', 'feedback')
            ->leftJoin('feedback', 'users.id', '=', 'feedback.user_id')
            ->groupBy('users.id')
            ->select('users.*', DB::raw('AVG(feedback.vote) as feedback_avg_vote'));
    
        if ($request->spec) {
            $doctorsList = $doctorsList->whereHas('specializations', function ($q) use ($spec) {
                $q->where('slug', $spec);
            });
        }
    
        if ($request->vote) {
            $doctorsList = $doctorsList->having('feedback_avg_vote', '>=', $vote);
        }
    
        $doctors = $doctorsList->paginate(12);
    
        $specializations = Specialization::all();
    
        return response()->json([
            'status' => true,
            'doctors' => $doctors,
            'specializations' => $specializations
        ]);
    }
} 
