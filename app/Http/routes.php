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
use AdvancedELOQUENT\Book; // Entidad

Route::get('/', function () {
    return Book::all(); //Todos los registros
});

// Buscar un registro que está en papelera
Route::get('registro-en-papelera/{id}', function ($id) {
    $book = Book::withTrashed()->find($id); 
    return $book;
});

// Enviar un registro a papelera
Route::get('enviar-a-papelera/{id}', function ($id) {
	$book = Book::find($id);
    $book->delete();
    return 'Enviado a papelera';
});

// Restaurar un registro que está en papelera
Route::get('restaurar-registro/{id}', function ($id) {
    $book = Book::withTrashed()->find($id);
    $book->restore();
    return 'Restaurado';
});

// Eliminar un registro de forma permanente
Route::get('eliminar-registro/{id}', function ($id) {
    $book = Book::withTrashed()->find($id);
    $book->forceDelete();
    return 'Eliminado de forma permanente';
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
