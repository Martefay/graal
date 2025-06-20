<?php

namespace App\Livewire;

use App\Helpers\CartManagment;
use App\Livewire\Partials\Header;
use App\Models\Category;
use App\Models\CategoryMenu;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Specification;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

#[Title('Товары')]
class SingleProduct extends Component
{
 
    use LivewireAlert;
    use WithPagination;

    
    public  $id;
    public  $category;

    

    public function render()
    {
        $category = CategoryMenu::where("is_active", 1)->where('id', $this->id)->first();
        $products = Menu::query()->where("is_active", 1)->where("categorymenu_id", $category->id);
       
        return view('livewire.single-product', [
            'menus' => $products->paginate(15),
            
        ]);
    }
    

    // public function render()
    // {
    //     $category = Category::where("is_active", 1)->where('id', $this->id)->first();
    //     $products = Product::query()->where("is_active", 1)->where("category_id", $category->id);
       
    //     return view('livewire.single-product', [
    //         'products' => $products->paginate(15),
            
    //     ]);
    // }


//      public function show($id)
// {
//     $menu = Menu::with(['categorymenu' => function($query) {
//             $query->select('id', 'name');
//         }])
//         ->select('id', 'name', 'price', 'quantity', 'categorymenu_id')
//         ->findOrFail($id);
    
//     $relatedMenus = Menu::where('categorymenu_id', $menu->categorymenu_id)
//         ->where('id', '!=', $id)
//         ->select('id', 'name', 'price', 'quantity')
//         ->limit(4)
//         ->get();
    
//     return view('livewire.page-product', compact('menu', 'relatedMenus'));
// }

// public function index()
// {
//     $categorymenus = CategoryMenu::with(['menus' => function($query) {
//             $query->where('is_active', true)
//                 ->orderBy('name')
//                 ->select('id', 'name', 'price', 'quantity', 'categorymenu_id');
//         }])
//         ->where('is_active', true)
//         ->select('id', 'name')
//         ->orderBy('name')
//         ->get();
    
//     return view('livewire.page-product', compact('categorymenus'));
// }

    // public function showOrCategory()
    // {
    //     $category = Category::where('is_active', true)->get((["id"]));

    //     $products = Product::where('is_active', true)->where('category_id', $category->id);

    //     return view('livewire.single-product', [
    //         'products' => $products,
    //     ]);
    // }
}
