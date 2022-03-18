<div x-data>

    <p class="text-gray-700 mb-4">
        <span class="font-semibold text-lg">Stock Disponible: </span> {{$quantity}}
    </p>
    <div class="flex"> 
        <div>
            <x-jet-secondary-button 
            disabled
            x-bind:disabled="$wire.qty <= 1"
            wire:loading.attr="disabled"
            wire:target="dec"
            wire:click="dec">
                -
            </x-jet-secondary-button>
            <span class="mx-2">{{$qty}}</span>
            <x-jet-secondary-button 
            x-bind:disabled="$wire.qty >= $wire.quantity"
            wire:loading.attr="disabled"
            wire:target="add"
            wire:click="add">
                +
            </x-jet-secondary-button>
        </div>
        <div class="flex-1">
            <x-jet-button class="w-full">
                Agregar producto al carrito
            </x-jet-button>
        </div>
    </div>
</div>
