<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::livewire('/','pages::home.home')->name('home');
Route::livewire('/about','pages::home.home')->name('about');
Route::livewire('/contact','pages::home.home')->name('contact');
Route::livewire('/service','pages::home.home')->name('service');

Route::get('clear-cache',function(){
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return redirect()->back();
})->name('clear-cache');
