<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorsListController extends Controller
{

    //returns a list of doctors on the url /guest/doctorlist
    //the request accept spec(the slug of specialization) and vote(number from 0 to 5) 
    public function index(Request $request)
    {
        $spec = $request->spec;
        $vote = $request->vote;
    
        $doctorsList = User::with('user_detail', 'specializations', 'feedback')->withAvg('feedback', 'vote');
        $specializations = Specialization::all();
    
        if ($request->spec) {
            $doctorsList = $doctorsList->whereHas('specializations', function ($q) use ($spec) {
                $q->where('slug', $spec);
            });
        }
    
        if ($request->vote) {
            $doctorsList = $doctorsList->having('feedback_avg_vote', '>=', $vote);
        }
    
        $doctors = $doctorsList->paginate(12);
    
        return response()->json([
            'status' => true,
            'doctors' => $doctors,
            'specializations' => $specializations
        ]);
    }

    //return a single doctor on the url /guest/doctor
    //the request acept Id as params to search doctor by id.
    public function show(Request $request) {
        $doctor = User::where('id', $request->id)->with('user_detail', 'specializations', 'feedback')->withAvg('feedback', 'vote')->first(); // da aggiungere select senza dati sensibile
        $specializations = Specialization::all();

        if ($doctor) {     

            return response()->json([
                'status' => true,
                'doctor' => $doctor,
                'specializations' => $specializations
            ]);
        } else {

            return response()->json([
                'status' => false,
                'error' => 'no doctor to display'
            ]);
        }
    }
} 
