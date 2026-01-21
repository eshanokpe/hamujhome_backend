<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeController;

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

Route::prefix('v1')->group(function () {

    // Single post 
    Route::get('/posts/{post}', [HomeController::class, 'show']);
    // Home page data
    Route::get('/home', [HomeController::class, 'index']);
    
    
    // All posts (blogs)
    Route::get('/posts', [HomeController::class, 'posts']);
    
    // Category posts
    Route::get('/categories/{category}/posts', [HomeController::class, 'categoryPosts']);
    
    // Search posts
    Route::get('/search', [HomeController::class, 'search']);
    
    // Get page by slug
    Route::get('/pages/{slug}', [HomeController::class, 'page']);
    
    // Get categories
    Route::get('/categories', [HomeController::class, 'categories']);
    
    // Get tags
    Route::get('/tags', [HomeController::class, 'tags']);
});