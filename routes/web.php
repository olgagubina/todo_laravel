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
    return view('welcome');
});

Route::get('var-pass',function () {
    return view('welcome', [
        'name' => 'Zaparazzi' // passing variables to view
    ]);

//    OR
//    return view('welcome')->with('name', 'Zaparazzi');

//    OR
//    $name = 'Zaparazzi';
//    return view ('welcome', compact('name');
});

Route::get('arr-pass',function () {
//    $list = [
//        'item 1',
//        'item 2',
//        'item 3'
//    ];
//    $list = DB::table('list')->get(); //it's a Query Builder, babe
    $list = App\Item::all(); //it's Eloquent
    return view ('welcome', compact('list'));
});

Route::get('list/{id}',function ($id) {
//    $item = DB::table('list')->find($id); //it's a Query Builder, babe
    $item = App\Item::find($id); //it's Eloquent
    return view ('list/show', compact('item'));
});

Route::get('users', 'UsersController@index');

Route::post('users', 'UsersController@store');
