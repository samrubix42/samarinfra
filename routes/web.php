<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/','pages::home.home')->name('home');
Route::livewire('/about','pages::about.about')->name('about');
Route::livewire('/contact','pages::contact.contact')->name('contact');
Route::livewire('/service','pages::service.service')->name('service');
