<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/elvish-ipsum/{paragraphs?}', function($paragraphs = '')
{
	return View::make('elvish-ipsum')
		->with('paragraphs', $paragraphs);
});

Route::post('/elvish-ipsum', function()
{
	$paragraphs = Input::get('paragraphs');

	if ($paragraphs == '') {
		return View::make('elvish-ipsum-error', array(
			'paragraphs' => '',
			'error' => 'Enter a value.'
		));
	}

	if (!is_numeric($paragraphs)) {
		return View::make('elvish-ipsum-error', array(
			'paragraphs' => '',
			'error' => 'Enter a numerical value!'
		));
	}

	if ($paragraphs <= 0) {
		return View::make('elvish-ipsum-error', array(
			'paragraphs' => '',
			'error' => 'You cannot have 0 paragraph'
		));
	}

	if ($paragraphs > 9) {
		return View::make('elvish-ipsum-error', array(
			'paragraphs' => '',
			'error' => 'You cannot have over 9 paragraphs'
		));
	}

    return View::make('elvish-ipsum-results')
    	->with('paragraphs', $paragraphs);
});

Route::get('/fakers/{users?}', function($users = '')
{
	return View::make('fakers')
		->with('users', $users);
});

Route::post('/fakers', function()
{
	$users = Input::get('users');

	if ($users == '') {
		return View::make('fakers-error', array(
			'users' => '',
			'error' => 'You have not entered a value!'
		));
	}

	if (!is_numeric($users)) {
		return View::make('fakers-error', array(
			'users' => '',
			'error' => 'Enter a numerical value!'
		));
	}

	if ($users <= 0) {
		return View::make('fakers-error', array(
			'users' => '',
			'error' => '0 user? Are you sure?'
		));
	}

	if ($users > 100) {
		return View::make('fakers-error', array(
			'users' => '',
			'error' => 'You can only have 100 users at most :('
		));
	}

    return View::make('fakers-results')
    	->with('users', $users);
});

//database testing

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo Pre::render($results);

});

