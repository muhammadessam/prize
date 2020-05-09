<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('admin.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'a1' => 'required',
            'correct' => 'required'
        ], [
            'question.required' => 'من فضلك تاكد من ادخال نص السؤال',
            'a1.required' => 'الاجابةالاولي اجبارية',
            'correct.required' => 'الاجابة الصحيحة علي السؤال اجبارية'
        ], []);
        Question::create($request->all());
        alert()->success('تم بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('admin.questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'question' => 'required',
            'a1' => 'required',
            'correct' => 'required'
        ], [
            'question.required' => 'من فضلك تاكد من ادخال نص السؤال',
            'a1.required' => 'الاجابةالاولي اجبارية',
            'correct.required' => 'الاجابة الصحيحة علي السؤال اجبارية'
        ], []);
        $question->update($request->all());
        alert()->success('تم بنجاح');
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        alert()->success('تم بنجاح');
        return back();
    }
}
