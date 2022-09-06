<?php
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function (){
    return view('Index');
});

Route::get('/add-user'               , 'SystemController@addUser');
Route::get('/edit-user/{userId}'     , 'SystemController@addUser');
Route::get('/'                       , 'SystemController@manageUsers');

Route::group(['prefix' => 'api'], function()  
{  
    Route::post('/add-user'             , 'UsersController@addUser');
    Route::get('/manage-users'          , 'UsersController@getAllUsers');
    Route::get('/edit-user/{userId}'    , 'UsersController@getAUser');
    Route::post('/update-user/{userId}' , 'UsersController@updateUser');
    Route::get('/del-user/{userId}'     , 'UsersController@delUser');
    Route::post('/filter-user'          , 'UsersController@filterData');
});

Auth::routes();


