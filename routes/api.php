<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Author\AuthorEpisodeController;
use App\Http\Controllers\Api\Author\AuthorStoryController;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\EpisodeController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\StoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('/stories')->group(function () {
        Route::get('/', [StoryController::class, 'index']);
        Route::get('/{story}', [StoryController::class, 'show']);
        Route::get('/{story}/episodes', [EpisodeController::class, 'index']);
        Route::post('/{story}/comments', [CommentController::class, 'story']);
        Route::get('/{story}/like', [LikeController::class, 'story']);
    });

    Route::prefix('/episodes')->group(function () {
        Route::get('/{episode}', [EpisodeController::class, 'show']);
        Route::post('/{episode}/comments', [CommentController::class, 'episode']);
        Route::get('/{episode}/like', [LikeController::class, 'episode']);
    });

    Route::prefix('/authors')->group(function () {
        Route::get('/', [AuthorController::class, 'index']);
        Route::get('/{user}', [AuthorController::class, 'show']);
    });

    Route::prefix('/comments')->group(function () {
        Route::patch('/{comment}', [CommentController::class, 'update']);
        Route::delete('/{comment}', [CommentController::class, 'destroy']);
        Route::post('/{comment}/replies', [CommentController::class, 'reply']);
        Route::get('/{comment}/like', [LikeController::class, 'comment']);
    });

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index']);
        Route::patch('/{user}', [ProfileController::class, 'update']);
        Route::patch('/{user}/password', [ProfileController::class, 'password']);
    });

    Route::get('/logout', [AuthController::class, 'logout']);
});