<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCartItem extends Component
{
    public $product;
    public $quantity; 
    public $qty = 1;

    public function mount() {
        $this->quantity = $this->product->quantity;
    }

    public function add() {
        $this->qty++;
    }

    public function dec() {
        $this->qty--;
    }

    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
