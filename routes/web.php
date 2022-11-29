<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    $task1 = Task::create([
//        'title' => 'Tasca1',
//        'description' => 'Tasca1 desc',
//        'completed' => 0,
//    ]);
//
//    $task2 = Task::create([
//        'title' => 'Tasca2',
//        'description' => 'Tasca2 desc',
//        'completed' => 1,
//    ]);
//
//    $task3 = Task::create([
//        'title' => 'Tasca3',
//        'description' => 'Tasca3 desc',
//        'completed' => 0,
//    ]);
//
//    $tasks = [
//        $task1,
//        $task2,
//        $task3
//    ];
    return view('tasks',[
        'tasks' => Task::all()
    ]);
});

Route::get('/tasks', function () {
    return view('tasks',[
        'tasks' => []
    ]);
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
});
