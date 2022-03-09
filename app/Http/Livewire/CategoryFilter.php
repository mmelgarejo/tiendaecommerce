<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class CategoryFilter extends Component
{

    public $category, $subcategoria, $marca;

    public function limpiar() {
        $this->reset(['subcategoria', 'marca']);
    }

    public function render()
    {
        // $products = $this->category->products()->where('status', 2)->paginate(20);

        //where('description', 'like', '%' . $this->search . '%')->

        $productsQuery = Product::query()->whereHas('subcategory.category', function(Builder $query) {
            $query->where('id', $this->category->id);
        });

        if($this->subcategoria) {
            $productsQuery = $productsQuery->whereHas('subcategory', function(Builder $query) {
                $query->where('name', $this->subcategoria);
            });
        }

        if($this->marca) {
            $productsQuery = $productsQuery->whereHas('brand', function(Builder $query) {
                $query->where('name', $this->marca);
            });
        }

        $products = $productsQuery->paginate(20);

        return view('livewire.category-filter', compact('products'));
    }
}
