<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.index');
});

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/products', function () {
    return view('site.products');
});

// Serve extracted magazine PDF
Route::get('/verdea/magazine', function () {
    $path = base_path('verdea/Verdea Magazine.pdf');
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
});

// Serve extracted images from the extracted_verdea/images folder
Route::get('/verdea/images/{filename}', function ($filename) {
    $base = base_path('verdea/extracted_verdea/images');
    $path = $base . DIRECTORY_SEPARATOR . $filename;
    if (!file_exists($path)) {
        abort(404);
    }
    $mime = mime_content_type($path) ?: 'image/png';
    return response()->file($path, ['Content-Type' => $mime]);
})->where('filename', '.*');
