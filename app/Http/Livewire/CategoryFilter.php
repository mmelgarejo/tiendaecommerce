<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryFilter extends Component
{

    public $category;

    public function render()
    {
        $products = $this->category->products()->where('status', 2)->get();

        //where('description', 'like', '%' . $this->search . '%')->

        return view('livewire.category-filter', compact('products'));
    }
}
