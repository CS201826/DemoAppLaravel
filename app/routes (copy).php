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
    return "Welcome Home";
});
 

/* Show the 'Admin' page but make sure one is authenticated first. */ 
Route::get('admin', array('before' => 'auth', function()
{
    return View::make('adminPage');
}));


/* Show the 'Login' page */
Route::get('login', function()
{
    /* Run a authentication check to see if we are already logged in */
    if (Auth::check())
    {
        /* Is this login via a 'Remember Me' method */
        if (Auth::viaRemember())
        {
            /* If yes ,pass a variable to the 'admin' page */
            return Redirect::to('admin')->with('rememberMe', 1);
        }
        else
        {
            return Redirect::to('admin');
        }
    }
    else
    {
        return View::make('loginForm');
    }
    
});
 
/* Logout the user, and redirect to the 'Login' screen */
Route::get('logout', function()
{
    Auth::logout();
    return Redirect::to('login');
});

 
/* Process the login request */ 
Route::post('login', function()
{
    
    $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
 
    /* Check if 'Remember Me' is checked */
    if(Input::get('persist') == 'on')
        $isAuth = Auth::attempt($userdata, true);
    else
        $isAuth = Auth::attempt($userdata);
    
    if($isAuth)
    {
        // we are now logged in, go to admin
        return Redirect::to('admin');
    }
    else
    {
        return Redirect::to('login');
    }
});

/* Assign resource to users */
Route::resource('users', 'UserController');

/* List all users */
Route::get('/users', 'UserController@index');

/* Create a new user */
Route::get('/users/create', 'UserController@create');

/* Store a user */
Route::post('/users/store', 'UserController@store');

/* Edit a user */
Route::get('/users/{id}/edit', 'UserController@edit');

/* Delete a user */
Route::get('/users/{id}/delete', 'UserController@destroy');