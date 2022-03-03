<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryFilter extends Component
{

    public $category;

    public $search = '';

    public function render()
    {
        $products = $this->category->products()->where('status', 2)->where('description', 'like', '%' . $this->search . '%')->get();

        return view('livewire.category-filter', compact('products'));
    }
}
