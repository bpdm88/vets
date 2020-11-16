<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Owners;

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

route::get('owners', [Owners::class, 'index']); // GET /api/owners

route::get('owners/{owner}', [Owners::class, 'show']); // GET /api/owners/{owner}

route::delete("owners/{owner}", [Owners::class, 'destroy']); // DELETE /api/owners/{owner}

route::post('owners', [Owners::class, 'store']); // POST /api/owners

route::put('owners/{owner}', [Owners::class, 'update']); // PUT /api/owners/{owner}