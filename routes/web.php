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
        ['title' => 'How to Build a Laravel Application', 'author' => 'John Doe', 'date' => '4 Juni 2025', 'content' => 'A step-by-step guide to building a Laravel application from scratch, covering everything from setup to deployment. Learn how to create a blog, manage users, and implement authentication using Laravel\'s powerful features.', 'img' => 'https://bwaplatformbucket.sgp1.cdn.digitaloceanspaces.com/assets/thumbnail_tips/BuildWithAngga-thumbnail-tips-6Z70Q-3-projek-website-modern-cocok-dibuat-menggunakan-framework-laravel-11-projek%20tiket%20wisata%20laravel%2011%20service%20repository%20pattern%20buildwithangga.png'],
        ['title' => 'Laravel 12 Released: What\'s New?', 'author' => 'Jane Smith', 'date' => '3 Juni 2025', 'content' => 'Laravel 12 has been released with exciting new features and improvements. In this article, we will explore the highlights of Laravel 12, including enhanced performance, new syntax, and improved developer experience', 'img' => 'https://media.licdn.com/dms/image/v2/D5612AQF3EACUSgUx8w/article-cover_image-shrink_720_1280/B56ZWLRI.bHEAI-/0/1741798282183?e=2147483647&v=beta&t=7U56cBb6eMmEoBuMjv9l23gA5juRYbfGgvfLK_IovHk'],
    ];

    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});
