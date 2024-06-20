<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WebtoonController;
use App\Http\Controllers\Api\EpisodeController;
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ReadingHistoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::get('webtoons', [WebtoonController::class, 'index']);
Route::get('webtoons/{webtoon_id}', [WebtoonController::class, 'show']);

Route::get('webtoons/{webtoon_id}/episodes', [EpisodeController::class, 'index']);
Route::get('episodes/{episode_id}', [EpisodeController::class, 'show']);

Route::get('episodes/{episode_id}/pages', [PageController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('users/profile', [UserController::class, 'show']);
    Route::put('users/update', [UserController::class, 'update']);
    Route::post('users/logout', [UserController::class, 'logout']);

    Route::post('users/favorites/{webtoon_id}', [UserController::class, 'favoriteWebtoon']);
    Route::delete('users/favorites/{webtoon_id}', [UserController::class, 'unfavoriteWebtoon']);

    Route::get('users/reading-history', [ReadingHistoryController::class, 'index']);
    Route::post('episodes/{episode_id}/mark-read', [ReadingHistoryController::class, 'markRead']);
});