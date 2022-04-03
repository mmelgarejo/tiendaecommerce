<div x-data>
    <p class="text-xl text-gray-700">Color: </p>

    <select wire:model="color_id" class="form-control w-full">
        <option value="" selected disabled>Seleccionar un color</option>
        @foreach ($colors as $color)
            <option value="{{$color->id}}">{{$color->name}}</option>
        @endforeach
    </select>
    @if ($quantity > 0) 
        <div class="flex mt-4 items-center">
            <p class="text-white text-sm uppercase bg-green-500 rounded p-2">Disponible</p>
            <p class="text-gray-700 text-sm ml-2">Stock: {{$product->stock}}</p>
        </div>
    @else
        <p class="text-white mt-4">
            <span class="text-center text-sm uppercase bg-red-500 rounded p-2">No Disponible</span>
        </p>
    @endif
    <div class="flex mt-4"> 
        <div class="mr-4">
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
            <x-button-add 
                color="gray"
                x-bind:disabled="!$wire.quantity"
                class="w-full"
                wire:click="addItem"
                wire:loading.attr="disabled"
                wire:target="addItem">
                Agregar producto al carrito
            </x-button-add>
        </div>
    </div>
</div>
