<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//


Route::get('/user/{id}', function (Request $request, $id) {
    return ['id' => $id, 'name' => 'Drew'];
});

Route::post('/user/{id}/update', function (Request $request) {
    return $request->all();
});

Route::post('/user/create', function (Request $request) {
    return $request->all();
});

Route::post('/user/{id}/destroy', function (Request $request) {
    return $request->all();
});

Route::get('/auth', function (Request $request) {
    return []; //['id' => 1, 'name' => 'Drew'];
});

Route::post('/login', function (Request $request) {
    return $request->all();
});

Route::post('/logout', function (Request $request) {
    return $request->all();
});


/**
 * Gallery Test
 */

Route::group(['prefix' => 'gallery'], function () {
    Route::get('/{slug}', function (Request $request, $slug) {
        return $request->all();
    });

    Route::get('/{slug}/json', function (Request $request, $slug) {
        return $request->all();
    });

    Route::post('/{slug}', function (Request $request, $slug) {
        return $request->all();
    });

    Route::post('/{slug}/json', function (Request $request, $slug) {
        return $request->all();
    });
});
