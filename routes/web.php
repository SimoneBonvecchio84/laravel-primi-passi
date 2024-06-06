<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $username   = "Classe1";
    $greeting   = "Ciao";
    $likeClass1 = true;
    $students   = [
        "Luca",
        "Ugo",
        "Ada",
        "Luigi",
        "Alfonzo",
        "Giamaria",
        "Federica",
        "Luisa",
        "Adelaide",
        "Giada",
        "Maria"
    ];

    $data = [
        'username' => $username,
        'greeting' => $greeting,
        'like'     => $likeClass1,
        'students' => $students
    ];
    return view('home', $data);
})->name('home');

Route::get('/chi-siamo', function () {
    $username   = "Classe2";
    $greeting   = "Ciao";
    $likeClass2 = true;
    $students   = [
        "Danila",
        "Laura",
        "Rossella",
        "Concetta",
        "Marisa",
        "Manuela",
        "Renato",
        "Marco",
        "Edoardo"
    ];

    $data = [
        'username'   => $username,
        'greeting'   => $greeting,
        'like'       => $likeClass2,
        'students'   => $students
    ];
    return view('about', $data);
})->name('about');




