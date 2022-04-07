<?php

namespace App\Http\Livewire;
use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;

class ShoppingCart extends Component
{

    public function destroyItem($rowId) {
        Cart::remove($rowId);

        $this->emitTo('add-cart-item', 'mount');
        $this->emitTo('add-cart-item-color', 'mount');
        $this->emitTo('add-cart-item-size', 'mount');
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
