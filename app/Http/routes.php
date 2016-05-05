<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use AdvancedELOQUENT\User;

Route::get('/', function () 
{
	$user = User::find(1);
	
	echo $user->name;
	foreach($user->exams as $exam)
	{
		echo 
			'<li>'
			. $exam->title
			. ' Nota ' . $exam->pivot->score
			. ' Fecha ' . $exam->pivot->created_at
			. '</li>';
	}
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
