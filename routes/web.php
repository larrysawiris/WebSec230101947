<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/multable/{number?}', function ($number = 5) {
    $j = $number;
    return view('multable',compact("j")); 
});
Route::get('/even', function () {
    return view('even'); 
});

Route::get('/prime', function () {
    return view('prime'); 
});

Route::get('/minitest', function () {
    $bill = [
        ['item' => 'chocolate', 'quantity' => 2, 'price' => 50],
        ['item' => 'Milk', 'quantity' => 1, 'price' => 30],
        ['item' => 'Bread', 'quantity' => 3, 'price' => 10],
        ['item' => 'Eggs', 'quantity' => 1, 'price' => 150],
    ];
    return view('minitest', compact('bill'));
});

Route::get('/transcript', function () {
    $courses = [
        ['name' => 'Web Security', 'grade' => 'A'],
        ['name' => 'Data Structures', 'grade' => 'B+'],
        ['name' => 'Operating Systems', 'grade' => 'A-'],
        ['name' => 'Networking', 'grade' => 'B'],
    ];
    return view('transcript', compact('courses'));
});

Route::get('/products', function () {
    $products = [
        ['name' => 'Laptop', 'image' => 'laptop.jpg', 'price' => '30,000', 'description' => 'High-performance laptop'],
        ['name' => 'Phone', 'image' => 'phone.jpg', 'price' => '15,000', 'description' => 'Latest smartphone'],
        ['name' => 'Headphones', 'image' => 'headphones.jpg', 'price' => '2,000', 'description' => 'Noise-canceling headphones'],
    ];
    return view('products', compact('products'));
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/gpa', function () {
    $courses = [
        ['code' => 'CS101', 'title' => 'Web Security', 'credit' => 3],
        ['code' => 'CS102', 'title' => 'Data Structures', 'credit' => 4],
        ['code' => 'CS103', 'title' => 'Operating Systems', 'credit' => 3],
    ];
    return view('gpa', compact('courses'));
});

