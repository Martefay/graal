<?php

use App\Livewire\PageContacts;
use App\Livewire\PageHome;
use App\Livewire\PageProducts;
use App\Livewire\SingleProduct;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', PageHome::class)->name('page.home');
Route::get('/products', PageProducts::class)->name('page.products');
// Route::get('/products/{slug}/show', SingleProduct::class)->name('single.product');
Route::get('/contacts', PageContacts::class)->name('page.contacts');