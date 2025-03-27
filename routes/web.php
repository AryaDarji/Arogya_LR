<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;

Route::get('/', [ChatController::class, 'index']);
Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('send.message')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('/reset-conversation', [ChatController::class, 'resetConversation'])->name('reset.conversation');
// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('users', [UserController::class, "index"])->name('users.index');
