<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('profile.index');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function(){
    return view('about');
});
Route::get('/contact', function(){
    return view('contact');
});

Route::get('/services', function () {

    $services = [
        [
            'title' => 'Chicken Korma',
            'slug' => 'chicken-korma',
            'image' => 'https://plus.unsplash.com/premium_photo-1669245207961-0281fd9396eb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGdyaWxsZWQlMjBjaGlja2VufGVufDB8fDB8fHww',
            'description' => 'Rich and creamy Mughlai chicken curry cooked with aromatic spices.'
        ],
        [
            'title' => 'Egg Fried Rice',
            'slug' => 'egg-fried-rice',
            'image' => 'https://images.unsplash.com/photo-1603133872878-684f208fb84b',
            'description' => 'Delicious Indo-Chinese rice tossed with eggs and vegetables.'
        ],
        [
            'title' => 'Paneer Butter Masala',
            'slug' => 'paneer-butter-masala',
            'image' => 'https://images.unsplash.com/photo-1628294896516-344152572ee8',
            'description' => 'Soft paneer cubes cooked in rich tomato butter gravy.'
        ]
    ];

    return view('services', compact('services'));
});


Route::get('/404', function(){
    return view('404');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
