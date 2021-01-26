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

/** Index route api */
Route::get('/', function(Request $request) {
    return [
        'name' => env('APP_NAME', 'Laravel'),
        'version' => env('APP_VERSION', '1.0.0')
    ];
});