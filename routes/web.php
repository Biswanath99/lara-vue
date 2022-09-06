<?php
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/welcome', function (){
    return view('Index');
});

// UI Routes to view all pages //
Route::get('/add-user'               , 'SystemController@addUser');
Route::get('/edit-user/{userId}'     , 'SystemController@addUser');
Route::get('/'                       , 'SystemController@manageUsers');

//API routes for CRUD operations //
Route::group(['prefix' => 'api'], function()  
{  
    Route::post('/add-user'             , 'UsersController@addUser');
    Route::get('/manage-users'          , 'UsersController@getAllUsers');
    Route::get('/edit-user/{userId}'    , 'UsersController@getAUser');
    Route::post('/update-user/{userId}' , 'UsersController@updateUser');
    Route::get('/del-user/{userId}'     , 'UsersController@delUser');
    Route::post('/filter-user'          , 'UsersController@filterData');
});




