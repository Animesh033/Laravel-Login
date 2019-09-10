<?php
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {

    // if(Auth::check()){
    //     return "The user is logged in";
    // }

    // $email = Auth::user()->email;
    // $password = Auth::user()->password;

    // if(Auth::attempt(['email' => $email, 'password' => $password])){
    //     return redirect()->intended('/home');
    // }

    // Auth::logout();



    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
