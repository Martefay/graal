<?php

namespace App\Livewire;

use App\Helpers\CartManagment;
use App\Livewire\Partials\Header;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Товары')]
class PageProducts extends Component
{

    use LivewireAlert;
    use WithPagination;

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $selected_brands = [];

    #[Url]
    public $featured;

    #[Url]
    public $sale;

    #[Url]
    public $price_range = 1000000;

    #[Url]
    public $sort = 'latest';


    public function resetFilters()
    {
        $this->selected_categories = [];
        $this->selected_brands = [];
        $this->featured = null;
        $this->sale = null;
        $this->price_range = 1000000;
        $this->sort = 'latest';
        $this->render();
    }

    public function addToCart($product_id)
    {
        $total_count = CartManagment::addItemToCart($product_id);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Header::class);

        $this->alert('success', 'Вы добавили товар в корзину', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

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

        if($this->sale)
        {
            $products->where("is_sale", 1);
        }

        if($this->price_range)
        {
            $products->whereBetween("price", [0, $this->price_range]);
        }

        if($this->sort == "latest")
        {
            $products->orderBy("updated_at", "DESC");
        }
        if($this->sort == "price")
        {
            $products->orderBy("price", "ASC");
        }

        return view('livewire.page-products', [
            'products' => $products->paginate(15),
            'categories' => Category::where("is_active", 1)->get(["id", "name", "slug"]),
            'brands' => Brand::where("is_active", 1)->get(["id", "name", "slug"]),
        ]);
    }
}
