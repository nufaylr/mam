<?php

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
   'password' => 'Auth\PasswordController',
]);

//Route::get('home', ['middleware' => 'auth', function() {

	//\App()->make('appListController@index');

    // Only authenticated users may enter...
    //return view('home',['applis' => 'App@getAllApps']); 

   // return View::make('home',array('applis' => 'appListController@index')); 
//}]);

/*Route::get('/', ['middleware' => 'auth', function() {
    // Only authenticated users may enter...

   $app = app();
  $controller = $app->make('appListController');
  return $controller->callAction('index');

}]);*/


Route::get('/','appListController@index');
Route::get('/store/apps/{id}','appListController@appItem');