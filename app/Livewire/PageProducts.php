<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Title('Товары')]
class PageProducts extends Component
{

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $selected_brands = [];

    #[Url]
    public $featured;

    #[Url]
    public $price_range = 1000000;

    #[Url]
    public $sort = 'latest';

    public function render()
    {
        $products = Product::query()->where("is_active", 1);

        if (!empty($this->selected_categories)) {
            $products->whereIn("category_id", $this->selected_categories);
        }

        if(!empty($this->selected_brands)) {
            $products->whereIn("brand_id", $this->selected_brands);
        }

        if($this->featured) {
            $products->where("is_featured", 1);
        }

        return view('livewire.page-products', [
            'products' => $products->paginate(15),
            'categories' => Category::where("is_active", 1)->get(["id", "name", "slug"]),
            'brands' => Brand::where("is_active", 1)->get(["id", "name", "slug"]),
        ]);
    }
}
