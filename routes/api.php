<?php

use App\Http\Controllers\PollController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('polls', [PollController::class, 'index']);
Route::post('polls',[PollController::class, 'store']);
Route::put('polls/{id}', [PollController::class, 'update']);
Route::get('polls/{id}' , [PollController::class, 'show']);
Route::delete('polls/{id}',[PollController::class, 'delete']);

Route::apiResource('questions', QuestionController::class);