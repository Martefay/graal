<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryMenu;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function showOrCategory($slug)
    // {
    //     $category = Category::where('is_active', true)->where('slug', $slug)->first();

    //     $products = Product::where('is_active', true)->where('category_id', $category->id)->get();

    //     return view('pages.single-category', [
    //         'products' => $products,
    //     ]);
    // }

   

}
