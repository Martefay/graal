<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Address;
use App\Models\Benefit;
use App\Models\Category;
use App\Models\CategoryMenu;
use App\Models\ContactFooter;
use App\Models\ContactHeader;
use App\Models\Copyright;
use App\Models\HeroSection;
use App\Models\HeroTitle;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\Phone;
use App\Models\Place;
use App\Models\Product;
use App\Models\Service;
use App\Models\Specification;
use App\Models\TimeTable;
use Filament\Forms\Components\Livewire;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $id;
    public $category_id;
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

   
    
    public function render($categorymenus)
    {
        return view('livewire.page-products', [
            $categorymenus => CategoryMenu::with('menus')->get()
        ]);
    }
   

    public function boot(): void
    {



        View::composer('*', function($view) {
            $logos = Logo::get();
            $view->with('logos', $logos);

            $contactheaders = ContactHeader::get();
            $view->with('contactheaders', $contactheaders);

            $timetables = TimeTable::get();
            $view->with('timetables', $timetables);

            $phones = Phone::get();
            $view->with('phones', $phones);

            $addresses = Address::get();
            $view->with('addresses', $addresses);

            $copyrights = Copyright::get();
            $view->with('copyrights', $copyrights);

            $herosections = HeroSection::get();
            $view->with('herosections', $herosections);

            $abouts = About::get();
            $view->with('abouts', $abouts);

            $benefits = Benefit::get();
            $view->with('benefits', $benefits);

            $herotitles = HeroTitle::get();
            $view->with('herotitles', $herotitles);

            $places = Place::get();
            $view->with('places', $places);

            

            // Использование

// $view->with('relatedMenus', $relatedMenus);

            
// Сначала получим категорию товара
// $categoryId = Menu::where('id', $id)->value('categorymenu_id');

// // Затем все товары этой категории
// $menusInSameCategory = Menu::getByCategoryId($categoryId);
            // $menus = Menu::get();
            // $view->with('menus', $menus);

    //         $categorymenus = CategoryMenu::get('id', $this->id);
    // $view->with('categorymenus', $categorymenus);

    // $menus = Menu::query('id', $categorymenus);
    // $view->with('menus', $menus);

            // $specifications = Specification::get();
            // $view->with('specifications', $specifications);

         

            // $products = Product::where('category_id', $this->category_id)->get();
            // $view->with('products', $products);
        });
    }
    // public function category($category) {
    //     $category = Category::where('slug', $category)->firstOrFail();
    //     $products = Product::where('category_id', $category->id);
    //     return view('livewire.single-product', compact('products', 'category'));
    // }
}
