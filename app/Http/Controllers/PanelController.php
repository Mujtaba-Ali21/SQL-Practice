<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Rating;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PanelController extends Controller
{
    // Create
    public function createEntry()
    {
        $products = Product::all();
        session(['previousUrl' => url()->previous()]);
        return view('createEntry', ['data' => $products]);
    }

    public function create(Request $req)
    {
        $validated = $req->validate([
            'product' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'required|string|max:255',
            'helpful_count' => 'required',
            'unhelpful_count' => 'required'
        ]);
    
        $rating = new Rating();
        $rating->product_id = $validated['product'];
        $rating->rating = $validated['rating'];
        $rating->message = $validated['message'];
        $rating->save();

        $averageRating = Rating::where('product_id', $validated['product'])
        ->select(DB::raw('FLOOR(AVG(rating)) AS average_rating'))
        ->value('average_rating');

        Product::where('id', $validated['product'])
        ->update(['average_rating' => $averageRating]);

        $rating->refresh();

        $newVote = new Vote();
        $newVote->rating_id = $rating->ID;
        $newVote->product_id = $rating->product_id;
        $newVote->helpful = $validated['helpful_count'];
        $newVote->unhelpful = $validated['unhelpful_count'];
        $newVote->save();
    
        $previousUrl = session('previousUrl');
        return redirect($previousUrl)->with("success", "New Entry Added Successfully!");
    }

    // Read
    public function read()
    {
        $ratings = Rating::with('votes')->paginate(5);       
        return view('adminPanel', ['data' => $ratings]);
    }
    
    // Update
    public function showUpdate($id)
    {
        $rating = Rating::find($id);
        session(['previousUrl' => url()->previous()]);
        return view('adminPanelEdit', ['data' => $rating]);
    }    

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'product' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'required|string|max:255',
            'helpful_count' => 'required|integer|min:0',
            'unhelpful_count' => 'required|integer|min:0'
        ]);
    
        DB::table('ratings')
            ->where('ID', $id)
            ->update([
                'product_id' => $request->input('product'),
                'rating' => $request->input('rating'),
                'message' => $request->input('message')
            ]);
    
        DB::table('votes')
            ->where('rating_id', $id)
            ->update([
                'helpful' => $request->input('helpful_count'),
                'unhelpful' => $request->input('unhelpful_count')
            ]);
    
        return redirect(session('previousUrl'))->with('success', 'Rating updated successfully');
    }
    

    // Delete
    public function delete(Request $request, $id)
    {
        $rating = DB::table('ratings')->where('ID', $id)->first();
    
        if (!$rating) {
            dd($rating);
        }
    
        $productId = $rating->product_id;
    
        DB::table('votes')->where('rating_id', $rating->ID)->delete();

        DB::table('ratings')->where('ID', $id)->delete();
    
        $averageRating = DB::table('ratings')->where('product_id', $productId)->avg('rating');
    
        DB::table('products')->where('ID', $productId)->update(['average_rating' => floor($averageRating)]);
    
        return redirect()->back()->with('success', 'Row Deleted Successfully!');
    }
    
}
