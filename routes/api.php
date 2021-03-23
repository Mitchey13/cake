<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Hellow World this is your queen of cakes
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
