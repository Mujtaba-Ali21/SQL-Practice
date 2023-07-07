<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Product;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    function read() {
        $questions = Question::all();
        $answers = Answer::all();

        return view('QuestionsAndAnswersTable', ['questions' => $questions, 'answers' => $answers]);
    }

    function askQuestion() {
        $products = Product::all();
        return view('askQuestion', ['data' => $products]);       
    }

    public function createQuestion(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|max:255',
            'product' => 'required|exists:products,ID',
        ]);

        $question = new Question;
        $question->question = $validated['question'];
        $question->product_id = $validated['product'];
        $question->save();

        return redirect('/QnATable')->with('success', 'Question Created Successfully');
    }

    public function showUpdate($id)
    {
        $question = Question::find($id);
        session(['previousUrl' => url()->previous()]);
        return view('QuestionEdit', ['data' => $question]);
    }    

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'product' => 'required',
            'question' => 'required|string|max:255',
        ]);
    
        DB::table('questions')
            ->where('ID', $id)
            ->update([
                'product_id' => $request->input('product'),
                'question' => $request->input('question')
            ]);
    
        return redirect(session('previousUrl'))->with('success', 'Question Updated Successfully');
    }

    public function delete(Request $request, $id)
    {
        $question = DB::table('questions')->where('ID', $id)->first();
    
        $productId = $question->product_id;
    
        DB::table('answers')->where('question_id', $question->ID)->delete();

        DB::table('questions')->where('ID', $id)->delete();
    
        return redirect()->back()->with('success', 'Question Deleted Successfully!');
    }



    public function showAnsUpdate($id)
    {
        $answer = Answer::find($id);
        session(['previousUrl' => url()->previous()]);
        return view('AnswerEdit', ['data' => $answer]);
    }    

    public function updateAns(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required|string|max:255',
        ]);
    
        DB::table('answers')
            ->where('ID', $id)
            ->update([
                'question_id' => $request->input('question'),
                'answer' => $request->input('answer')
            ]);
    
        return redirect(session('previousUrl'))->with('success', 'Answer Updated Successfully');
    }

    public function deleteAns(Request $request, $id)
    {
        $answer = DB::table('answers')->where('ID', $id)->first();
    
        $questionId = $answer->question_id;

        DB::table('answers')->where('ID', $id)->delete();
    
        return redirect()->back()->with('success', 'Answer Deleted Successfully!');
    }
    
}
