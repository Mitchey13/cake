<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Hellow World
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
