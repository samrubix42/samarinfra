<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::livewire('/','pages::home.home')->name('home');
Route::livewire('/about','pages::about.about')->name('about');
Route::livewire('/contact','pages::contact.contact')->name('contact');
Route::livewire('/service','pages::service.service')->name('service');


Route::get('clear-cache',function(){
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return redirect()->back();
})->name('clear-cache');
