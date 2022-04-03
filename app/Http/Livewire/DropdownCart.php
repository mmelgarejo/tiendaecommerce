<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class DropdownCart extends Component
{

    protected $listeners = ['render'];

    public function destroyCart() {
        Cart::destroy();

        $this->emitTo('add-cart-item', 'mount');
        $this->emitTo('add-cart-item-color', 'mount');
        $this->emitTo('add-cart-item-size', 'mount');
    }

    public function render()
    {
        return view('livewire.dropdown-cart');
    }
}
