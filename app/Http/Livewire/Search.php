<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public $open = false;

    public function updatedSearch($value) {
        if ($value) {
            $this->open = true;
        } else {
            $this->open = false;
        }
        
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('name', 'ILIKE', '%'. $this->search . '%')
                                ->take(8)
                                ->where('status', 2)->get();
        } else {
            $products = [];
        }
        

        return view('livewire.search', compact('products'));
    }
}
