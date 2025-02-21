<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('head', function () {
    return view('head');
});

Route::get('project', function () {
    return view('project');
});

Route::get('project2', function () {
    return view('project2');
});


Route::get('about', function () {
    return view('about');
});

Route::get('list_project', function () {
    return view('list_project');
});

Route::get('project3', function () {
    return view('project3');
});




