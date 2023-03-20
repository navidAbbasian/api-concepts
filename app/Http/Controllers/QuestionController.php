<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        return response()->json($request->all(), 200);
    }
    public function store(Request $request)
    {
        return response()->json(Question::create($request->all()), 200);
    }
    public function show(Question $question)
    {
        return response()->json($question, 200);
    }
    public function update(Request $request, Question $question)
    {
        return response()->json($question->update($request->all()),200);
    }
    public function destroy(Question $question)
    {
        return response()->json($question->delete(),200);
    }
}