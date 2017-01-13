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
	//* This is some data that we want to display from a data base or a curl request...
	$people = ['Bob', 'Linda', 'Tina', 'Gene', 'Louise']; //* We can send this as a second argument.
	//return view('welcome');
	//* Passing data to our view in one of two ways.
	//* 1. As a second argument:
	//* return view('welcome', ['belcher' => $belcher]);
	//* 1a. return view('welcome', compact('people'));
									//* compact creates an array with the key of 'people' and the value of whatever is associated with the variable.
	//* 1b. return view('welcome')->with('people', $people);
	//* 2. As a dynamic method:
	//* return view('welcome')->withPeople($people);
    
    return view('welcome', compact('people'));
});

Route::get ('about', function ()
{
    return view('pages.about'); //* Laravel interprets this as 'look in: resources/views/pages/about.blade.php'
});
