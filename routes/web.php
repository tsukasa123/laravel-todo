<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//static route
Route::get('/hello',function(){
    return "<h2>Hello</h2>";
});

//Dynamic route
Route::get('/user/{name}/{id?}',function($name,$id=null){
    return 'Welcome '.$name.' with id '.$id;
})->where(['name'=> '[A-Za-z]+','id'=> '[0-9]+']);

Route::get('/index','PagesController@index')->name('index');
Route::get('/services','PagesController@services')->name('services');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/todos', 'TodoController@index')->name('todos');
Route::get('/new-todo', 'TodoController@create')->name('todos.create');
Route::post('/store-todo', 'TodoController@store')->name('todos.store');
Route::get('/edit-todo/{todo}', 'TodoController@edit')->name('todos.edit');
Route::put('/update-todo/{todo}', 'TodoController@update')->name('todos.update');
Route::get('/delete-todo/{todo}', 'TodoController@delete')->name('todos.delete');
Route::get('/todo-done/{todo}', 'TodoController@done')->name('todo.done');
Route::get('/todo-details/{todo}', 'TodoController@show')->name('todos.show');
