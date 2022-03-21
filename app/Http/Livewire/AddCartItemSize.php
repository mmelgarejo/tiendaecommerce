<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Size;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;


class AddCartItemSize extends Component
{
    public $product, $sizes;

    public $color_id = '';
    public $size_id = '';

    public $colors = [];

    public $qty = 1;

    public $quantity = 0;

    public $options = [];

    public function add() {
        $this->qty++;
    }

    public function dec() {
        $this->qty--;
    }

    public function updatedSizeId($value) {
        $size = Size::find($value);

        $this->colors = $size->colors;

        $this->options['size'] = $size->name;
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


    public function mount() {
        $this->sizes = $this->product->sizes;
        $this->options['image'] = Storage::url($this->product->images->first()->url);
    }

    public function render()
    {
        return view('livewire.add-cart-item-size');
    }

    public function updatedColorId($value) {
        $size = Size::find($this->size_id);
        $color = $size->colors->find($value);
        $this->quantity = $color->pivot->quantity;
        $this->options['color'] = $color->name;
    }
}
