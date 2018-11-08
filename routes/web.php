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

Route::get('/hello', function () {
    $tasks = [
        'todo 1' => 'Сделать дело',
        'todo 2' => 'Гулять смело',
    ];
    return view('hello', compact('tasks'));
});

/*
Route::get('/tasks', function () {
     // $tasks = \Illuminate\Support\Facades\DB::table('tasks') -> get();
    $tasks['incomplete'] = App\Task::incomplete();
    $tasks['complete'] = App\Task::completed();
    return view('tasks', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    // $task = \Illuminate\Support\Facades\DB::table('tasks') -> find($id);
    $task = App\Task::find($id);
    return view('task', compact('task'));
}); */

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
