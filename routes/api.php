<?php

use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;

Route::get('polls', [PollController::class, 'index']);
Route::post('polls',[PollController::class, 'store']);
Route::put('polls/{id}', [PollController::class, 'update']);
Route::get('polls/{id}' , [PollController::class, 'show']);
Route::delete('polls/{id}',[PollController::class, 'delete']);