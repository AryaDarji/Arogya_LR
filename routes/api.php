
<?php
  
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\UserQuestionController;
  
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
     
// Route::middleware('auth:api')->group( function () {
//     Route::resource('users', UserController::class);
// });

// User Questions Routes
Route::prefix('questions')->group(function () {
    Route::get('/intro', [UserQuestionController::class, 'getIntroQuestions']);
    Route::get('/prakruti', [UserQuestionController::class, 'getPrakrutiQuestions']);
    Route::get('/type/{type}', [UserQuestionController::class, 'getQuestionsByType']);
    Route::get('/{id}', [UserQuestionController::class, 'getQuestionWithFollowups']);
    Route::post('/', [UserQuestionController::class, 'store']);
    Route::put('/{id}', [UserQuestionController::class, 'update']);
    Route::delete('/{id}', [UserQuestionController::class, 'destroy']);
});