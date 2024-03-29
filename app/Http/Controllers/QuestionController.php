<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        //withCount add a {relation}_count attribute to the results that shows the number of answers. 'answer' = the name of the method in the model Question
        $questions = Question::withCount('answer')->get();
        return view('questions.index',compact('questions'));
    }

    public function show($id)
    {
        $question1 = Question::findOrFail($id);
        $answers = $question1->answer()->get();
        return view('questions.show',compact('question1', 'answers'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
        ], [
            'title.required' => 'Title is required!',
            'text.required' => 'Text is required!'
        ]);

        $data= $request->all();

        $new_question = new Question;
        $new_question->title = $data['title'];
        $new_question->text = $data['text'];

        $new_question->save();

        session()->flash('success_message','Your question has been posted!');

        return redirect()->route('questions.display');
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('questions.edit', compact('question'));
    }

    public function save($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
        ], [
            'title.required' => 'Title is required!',
            'text.required' => 'Text is required!'
        ]);

        $data= $request->all();

        $question = Question::findOrFail($id);
        $question->title = $data['title'] ?? $question->title;
        $question->text = $data['text'] ?? $question->text;

        $question->save();

        session()->flash('success_message','Your question has been edited!');

        return redirect()->route('questions.display');
    }
    public function delete($id, Request $request){
        $question = Question::findOrFail($id);
        $question->delete();
        
        return redirect()->route('questions.display');
    }
}
