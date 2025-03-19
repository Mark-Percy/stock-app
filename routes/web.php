<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Models\Recipe;

Route::get('/', function () {
    $recipes = Recipe::all();
    return view('home',['heading' => 'Home Page']);
})->name('home');

Route::get('/profile' , function() {
    return view('profile', ['heading' => 'Profile Page']);
})->name('profile');

Route::get('/recipes' , function() {
    return view('recipes', ['heading' => 'Recipe Page', 'recipes' => Recipe::all()]);

})->name('recipe');

Route::get('/recipes/{id}' , function($id) {
    return view('recipe', ['recipe' => Recipe::find($id)]);

})->name('recipe');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
