<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use webcisepro\Note;
use webcisepro\Paises;
use webcisepro\Personal;


//============================================================================================================================================================================================================
Route::get('/', function ()
{
    return view('welcome');
});
//============================================================================================================================================================================================================
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
//============================================================================================================================================================================================================
Route::get('notes',function()
{
   //return "Notas creadas";
    $notes= Note::all();

 //   dd($notes);//comando para ayuda de laravel
    return view('notes/list',compact('notes'));
}
);
Route::get('notes/create',function()
{
    return view('notes/create');
}
);
Route::get('mensajes/error',function()
{
    return view('mensajes/error');
}
);
//============================================================================================================================================================================================================
Route::get('paises', function()
{
    $paises= Paises::paginate();
    return view('paises',compact('paises'));
}
);
//============================================================================================================================================================================================================
Route::get('personal', function()
{
    $personal= Personal::paginate();
    return view('personal',compact('personal'));
}
);
//============================================================================================================================================================================================================
Route::get('acerca', function()
{
   return view('acerca');
}
);
//============================================================================================================================================================================================================
Route::get('contacto', function()
{
    return view('contacto');
}
);
Route::get('identidad', function()
{
    return view('web.identidad');
}
);
Route::get('servicio', function()
{
    return view('web.servicio');
}
);
Route::get('donde', function()
{
    return view('web.donde');
}
);
Route::get('contacto', function()
{
    return view('web.contacto');
}
);
//============================================================================================================================================================================================================
Route::get('pdf', 'PdfController@generar');
Route::get('pdf/descargar', 'PdfController@descargar');
//============================================================================================================================================================================================================
//Route::get('notes/create',function()
//{
//    return '[Create notes]';
//}
//);
//CONTROL + / PARA COMENTAR O DESCOMENTAR
////============================================================================================================================================================================================================
Route::get('notes/{note}/{slug?}',function($note,$slug=null)
{
   // return $note;
    dd($note,$slug);
}
)->where('note','[0-9]+');
//============================================================================================================================================================================================================
Route::get('notes/{id}', function ($id)
{
    return "Esto es un ID:".$id;
}
)->where(['id' => '[\d]+']);
//============================================================================================================================================================================================================
Route::get('notes/{note}/{slug}', function ($slug)
{
    return "Esto es un Slug:".$slug;
}
)->where(['slug' => 'create|delete|update']);
//============================================================================================================================================================================================================
Route::get('notes/{note}', function ($note)
{
    return "Esto es un note:".$note;
})->where(['name' => '[-\w]+']);
//============================================================================================================================================================================================================
Route::controllers([
    'users'     =>'UsersController',
    'auth'      =>'Auth\AuthController',
    'pasword'   =>'Auth\PasswordController',
    'cadenas'   =>'Cadenas\CadenasController',
   ]);