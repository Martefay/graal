<?php

use App\Livewire\Forms;
use App\Livewire\PageBrons;
use App\Livewire\PageCategoryProduct;
use App\Livewire\PageContacts;
use App\Livewire\PageHome;
use App\Livewire\PageProducts;
use App\Livewire\PageReviews;
use App\Livewire\SingleProduct;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', PageHome::class)->name('page.home');
Route::get('/products', PageProducts::class)->name('page.products');
Route::get('/bron', Forms::class)->name('page.bron');
Route::get('/review', PageReviews::class)->name('page.review');
Route::get('/category/{id}', SingleProduct::class,)->name('single.product');
// Route::prefix('/categories')->as('category.')->group(function()
// {
    // Route::get('/{slug}', [HomeController::class, 'showOrCategory'])->name('show');
// });

Route::get('/products/{category_id}/category', PageCategoryProduct::class)->name('page.category-product');
Route::get('/contacts', PageContacts::class)->name('page.contacts');
