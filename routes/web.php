<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contacts', function () {
    return "<h1>All contacts</h1>";
});

Route::get('/contacts/create', function () {
    return "<h1>Add new contact</h1>";
});

Route::get('/contacts/{id}', function ($id) {
    return "Contact " . $id;
})->whereNumber('id');

Route::get('/companies/{name?}', function ($name = null) {
    if ($name) {
        return "Company " . $name;
    } else {
        return "All companies";
    }
})->whereAlphaNumeric('name');
