<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PollController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'title'=>'required|max:10'
        ]);
        $poll = Poll::create($attributes);
        return response()->json($poll, 201);
    }
    public function index()
    {
        return response()->json(Poll::get(), 200);
    }
    public function show($id)
    {
        $poll = Poll::find($id);
        if(is_null($poll)){
            return response()->json(null,404);
        }
        return response()->json(Poll::findOrFail($id), 200);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $poll= Poll::where('id', $id)->update($input);
        return response()->json($poll, 200);
    }
    public function delete($id)
    {
        $poll = Poll::find($id);
        $poll->delete();
    }
}