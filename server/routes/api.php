<?php

use App\Http\Controllers\API\CategoryController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/goods', [\App\Http\Controllers\API\GoodController::class, 'index'])->name('goods.index');

Route::prefix('categories')->controller(CategoryController::class)->group(function () {
   Route::get('/', 'index')->name('categories.index');
   Route::get('/{category}', 'show')->name('categories.show');
});
