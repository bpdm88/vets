<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Owners;
use App\Http\Controllers\API\Animals;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["prefix" => "owners", "middleware" => ["auth:api"]], function() {

    Route::get('', [Owners::class, 'index']); // GET /api/owners
    Route::post('', [Owners::class, 'store']); // POST /api/owners

    Route::group(["prefix" => "{owner}"], function() {
        
        Route::get("", [Owners::class, "show"]); // GET /api/owners/{owner}
        Route::put("", [Owners::class, "update"]); // PUT /api/owners/{owner}
        Route::delete("", [Owners::class, "destroy"]); // DELETE /api/owners/{owner}

        Route::group(["prefix" => "animals"], function() {

            Route::get('', [Animals::class, 'index']); // GET /api/owners/{owner}/animals
            Route::post('', [Animals::class, 'store']); // POST /api/owners/{owner}/animals

            Route::group(["prefix" => "{animal}"], function() {

                Route::get("", [Animals::class, "show"]); // GET /api/owners/{owner}/animals/{animal}
                Route::put("", [Animals::class, "update"]); // PUT /api/owners/{owner}/animals/{animal}
                Route::delete("", [Animals::class, "destroy"]); // DELETE /api/owners/{owner}/animals/{animal}
            });
        });
    });
});