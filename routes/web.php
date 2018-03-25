<?php

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
    $now = \Carbon\Carbon::yesterday();
    $partyDate = \Carbon\Carbon::createFromTimestamp(mktime(0, 0, 0, 5, 12, 2018));

    $daysToParty = $partyDate->diffInDays($now);

    return view('prefix')->with(compact('daysToParty'));
})->name('prefix');

Route::get('/mainpage', function () {
    return view('index');
})->name('index');

Route::get('/anmeldung', 'AnmeldungController@anmeldung');