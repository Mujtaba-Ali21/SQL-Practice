<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Answer;
use App\Models\Rating;
use App\Models\Product;
use App\Models\Question;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{

    function rate(Request $req, $id)
    {
        $validated = $req->validate([
            'rating' => 'required|integer|min:1|max:5',
            'feedback' => 'required|string|max:255'
        ]);
    
        $rating = new Rating;
        $rating->rating = $validated['rating'];
        $rating->message = $validated['feedback'];
        $rating->product_id = $id;
        $rating->save();
    
        $averageRating = Rating::find($id);
        $averageRating->updateAverageRating();
    
        return redirect()->back()->with('success', 'Product Rated Successfully');
    }

    function createQuestion(Request $req, $id) {
        $validated = $req->validate([
            'question' => 'required|max:255'
        ]);

        $question = new Question;
        $question->question = $validated['question'];
        $question->product_id = $id;
        $question->save();

        return redirect()->back()->with('success', 'Success');
    }

    function createAnswer($id) {
        $question = Question::find($id);

        return view('answer', ["question" => $question]);
    }

    function saveAnswer(Request $req, $id) {
        $validated = $req->validate([
            'answer' => 'required|max:255'
        ]);

        $answer = new Answer;
        $answer->answer = $validated['answer'];
        $answer->question_id = $id;
        $answer->save();

        return redirect()->back()->with('success', 'Question Answerd Successfully');
        
    }

    function show($id)
    {
        $product = Product::find($id);
    
        $ratings = Rating::where('product_id', $id)->get();
    
        $total_reviews = Rating::where('product_id', $id)->count('rating');
    
        $ratingIds = $ratings->pluck('ID')->toArray();
        $votes = Vote::whereIn('rating_id', $ratingIds)
            ->select('rating_id', 'helpful', 'unhelpful')
            ->get()
            ->groupBy('rating_id');
    
        $averageRating = $product->average_rating;
    

        $questions = Question::where('product_id', $id)->get();

        $answers = Answer::get();

        return view('productDetails', [
            'product' => $product,
            'ratings' => $ratings,
            'totalReviews' => $total_reviews,
            'votes' => $votes,
            'averageRating' => $averageRating,
            'questions' => $questions,
            'answers' => $answers
        ]);
    } 
    
}
