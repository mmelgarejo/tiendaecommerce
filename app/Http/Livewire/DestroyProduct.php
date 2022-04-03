<?php

namespace App\Http\Livewire;

use App\Models\Product;
use LivewireUI\Modal\ModalComponent;

class DestroyProduct extends ModalComponent
{

    public $product;

    public function mount(Product $product) {
        $this->product = $product;
    }

    public function delete() {
        if($this->product) {
            Product::find($this->product->id)->delete();
        }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);
    }

    public function close() {
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.destroy-product');
    }
}
