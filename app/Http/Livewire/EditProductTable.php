<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class EditProductTable extends Component
{
    public $search = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $order;
 
    public function mount($order)
    {
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.edit-product-table', [
            'products' => Product::where([['archive', 0], ['name', 'like', '%' . $this->search . '%']])->orderBy('category_id', 'ASC')->orderBy('name', 'ASC')->paginate(12)
        ]);
    }
}
