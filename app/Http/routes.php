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

use AdvancedELOQUENT\Post;
use AdvancedELOQUENT\Video;
use AdvancedELOQUENT\Tag;

Route::get('/', function () 
{
	$post = Post::first();

	echo 'POST: ' . $post->title;
	foreach($post->tags as $tag){
		echo '<li>' . $tag->title . '</li>';
	}

	$video = Video::first();

	echo 'VIDEO: ' . $video->title;
	foreach($video->tags as $tag){
		echo '<li>' . $tag->title . '</li>';
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
