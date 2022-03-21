<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;

class AddCartItemColor extends Component
{
    public $product, $colors; 
    public $color_id = '';

    public $quantity = 0;
    public $qty = 1;

    public $options = [
        'size_id' => null
    ];

    public function add() {
        $this->qty++;
    }

    public function dec() {
        $this->qty--;
    }

    public function mount() {
        $this->colors = $this->product->colors;
        $this->options['image'] = Storage::url($this->product->images->first()->url);
    }

    public function render()
    {
        return view('livewire.add-cart-item-color');
    }

    public function addItem() {
        Cart::add(['id' => $this->product->id, 
                    'name' => $this->product->name, 
                    'qty' => $this->qty, 
                    'price' => $this->product->price, 
                    'weight' => 550,
                    'options' => $this->options
                ]);

        $this->emitTo('dropdown-cart', 'render');
    }

    public function updatedColorId($value) {
        $color = $this->product->colors->find($value);
        $this->quantity = $color->pivot->quantity;
        $this->options['color'] = $color->name;
    }
}
