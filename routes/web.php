<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;

Route::get('/', [ParticipantController::class, 'index'])->name('index.participant');  
Route::get('create', [ParticipantController::class, 'create'])->name('participant.create');
Route::post('store', [ParticipantController::class, 'store'])->name('participant.store');