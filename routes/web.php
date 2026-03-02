<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/','pages::home.home')->name('home');
Route::livewire('/about','pages::home.home')->name('about');
Route::livewire('/contact','pages::home.home')->name('contact');
Route::livewire('/service','pages::home.home')->name('service');
