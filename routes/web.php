<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return  view('welcome');
});


Route::get('/posts/{post}', function ($post) {
    return view('posts.show', ['post' => $post]);
});

Route::get('/pdf', function () {
    return view('posts.pdf');
});

use App\Http\Controllers\PDFController;

Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
