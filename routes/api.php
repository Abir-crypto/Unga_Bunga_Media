<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/all/user', [\App\Http\Controllers\UserController::class, 'getAllUsers']);
Route::get('/all/post', [\App\Http\Controllers\PostController::class, 'getAllPosts']);
Route::get('/all/comment', [\App\Http\Controllers\CommentController::class, 'getAllComments']);

Route::get('/user/{user}', [\App\Http\Controllers\UserController::class, 'getUser']);
Route::get('/post/{post}', [\App\Http\Controllers\PostController::class, 'getPost']);
Route::get('/comment/{comment}', [\App\Http\Controllers\CommentController::class, 'getComment']);

Route::post('/add/user', [\App\Http\Controllers\UserController::class, 'createUser']);
Route::post('/add/post', [\App\Http\Controllers\PostController::class, 'createPost']);
Route::post('/add/comment', [\App\Http\Controllers\CommentController::class, 'createComment']);
