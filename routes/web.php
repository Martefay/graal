<?php

use App\Livewire\PageCategoryProduct;
use App\Livewire\PageContacts;
use App\Livewire\PageHome;
use App\Livewire\PageLogin;
use App\Livewire\PageProducts;
use App\Livewire\SingleProduct;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', PageHome::class)->name('page.home');
Route::get('/products', PageProducts::class)->name('page.products');
Route::get('/products/{slug}/show', SingleProduct::class)->name('single.product');
Route::get('/products/{category_id}/category', PageCategoryProduct::class)->name('page.category-product');
Route::get('/contacts', PageContacts::class)->name('page.contacts');
Route::get('/login', PageLogin::class)->name('page.login');