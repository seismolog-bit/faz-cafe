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
            'products' => Product::where([['archive', 0], ['name', 'like', '%' . $this->search . '%']])->orderByRaw("FIELD(category_id , '4', '1', '2', '3') ASC")->orderBy('name', 'ASC')->paginate(12)
        ]);
    }
}