<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/posts', function () {
    $posts = [
        ['title' => 'How to Build a Laravel Application', 'author' => 'John Doe', 'content' => 'A step-by-step guide to building a Laravel application from scratch, covering everything from setup to deployment. Learn how to create a blog, manage users, and implement authentication using Laravel\'s powerful features.'],
        ['title' => 'Laravel 12 Released: What\'s New?', 'author' => 'Jane Smith', 'content' => 'Laravel 12 has been released with exciting new features and improvements. In this article, we will explore the highlights of Laravel 12, including enhanced performance, new syntax, and improved developer experience']
    ];

    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});
