<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class CartProductTable extends Component
{
    public $search = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.cart-product-table', [
            'products' => Product::where([['archive', 0], ['name', 'like', '%' . $this->search . '%']])->orderBy('category_id', 'ASC')->paginate(12)
        ]);
    }
}