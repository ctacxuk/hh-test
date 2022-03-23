<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    $response = Http::post('http://hh-test2.local/api/input', ['answer_id' => 4, 'respondent_id' => 1]);
    dump(json_decode($response->body()));

    return view('welcome');
});





