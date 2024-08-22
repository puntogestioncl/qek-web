<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/eventos', \App\Livewire\ListEvents::class)->name('list-events');

Route::get('/evento/{event}', \App\Livewire\Event::class)->name('event');

Route::get('/politicas-de-privacidad', \App\Livewire\PrivacyPolicy::class)->name('privacy-policy');
Route::get('/darse-de-baja', \App\Livewire\Unsubscribe::class)->name('unsubscribe');

Route::get('/x', function (){
    return view('index');
});
