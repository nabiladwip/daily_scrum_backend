<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');


Route::middleware(['jwt.verify'])->group(function(){
    //user
    Route::get('user', "UserController@getAll");
	Route::delete('user/delete/{id}', "UserController@delete");
	Route::post('user/ubah', "UserController@ubah");
	Route::get('user/data', "UserController@index");

	Route::get('dailyScrum/{id}', "dailyScrumController@index"); //read daily_Scrum
	Route::post('dailyScrum', 'dailyScrumController@store'); //create daily_Scrum
	Route::delete('dailyScrum/{id}', "dailyScrumController@delete"); //delete daily_Scrum



    


});