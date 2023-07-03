<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Vote;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    public function helpful(Request $req, $id)
    {
        $rating = Rating::findOrFail($id);
        
        $vote = Vote::where('rating_id', $rating->id)->first();
        
        $vote = new Vote();
        $vote->rating_id = $rating->ID;
        $vote->product_id = $rating->product_id;
        $vote->helpful = 1;
        $vote->unhelpful = 0;
        $vote->save();
        
        return response()->json(['success' => true, 'action' => 'added']);
    }

    public function unhelpful(Request $request, $id)
    {
        $rating = Rating::findOrFail($id);

        $vote = Vote::where('rating_id', $rating->id)->first();
       
            $vote = new Vote();
            $vote->rating_id = $rating->ID;
            $vote->product_id = $rating->product_id;
            $vote->helpful = 0;
            $vote->unhelpful = 1;
            $vote->save();

        return response()->json(['success' => true, 'action' => 'added']);
    }
}
