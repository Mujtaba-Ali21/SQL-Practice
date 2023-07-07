<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VotingController extends Controller
{
    public function helpful(Request $request, $id)
    {
        $rating = Rating::findOrFail($id);
    
        $productVote = $rating->votes()->first();
    
            if (!$productVote) {
                DB::table('votes')->insert([
                    'rating_id' => $rating->ID,
                    'product_id' => $rating->product_id,
                    'helpful' => 1,
                    'unhelpful' => 0
                ]);
            } else {
                DB::table('votes')->where('rating_id', $rating->ID)->increment('helpful');
            }
    
        return response()->json(['success' => true, 'action' => 'added']);
    }   

    public function unhelpful(Request $request, $id)
    {
        $rating = Rating::findOrFail($id);

        $vote = $rating->votes()->first();
       
            if (!$vote) {
                DB::table('votes')->insert([
                    'rating_id' => $rating->ID,
                    'product_id' => $rating->product_id,
                    'helpful' => 0,
                    'unhelpful' => 1
                ]);
            } else {
                DB::table('votes')->where('rating_id', $rating->ID)->increment('unhelpful');
            }

        return response()->json(['success' => true, 'action' => 'added']);
    }
}
