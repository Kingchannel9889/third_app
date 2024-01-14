<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourControllerName;
use App\Http\Controllers\ContactController;


Route::get('/', [YourControllerName::class, 'index'])->name('home');
Route::get('/about', [YourControllerName::class, 'about'])->name('about');
Route::get('/contact', [YourControllerName::class, 'contact'])->name('contact');



Route::get('/services', function () {
    $travelServices = [
        [
            'title' => 'Customized Travel Packages',
            'image' => 'package.jpg',
            'description' => 'Create your dream vacation with personalized travel packages tailored to your preferences.',
        ],
        [
            'title' => 'Guided Tours',
            'image' => 'tourguide.jpg',
            'description' => 'Explore the world with our experienced guides who will make your journey memorable and insightful.',
        ],
        [
            'title' => 'Luxury Accommodations',
            'image' => 'hotel.jpg',
            'description' => 'Indulge in luxury with our carefully selected accommodations to make your stay extraordinary.',
        ],
    ];

    return view('services', ['travelServices' => $travelServices]);
})->name('services');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');