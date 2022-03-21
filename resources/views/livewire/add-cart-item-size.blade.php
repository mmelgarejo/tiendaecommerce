<div x-data>
    <div>
        <p class="text-xl text-gray-700">Talla: </p>
        <select wire:model="size_id" class="form-control w-full">
            <option value="" selected disabled>Seleccione una talla</option>
            @foreach ($sizes as $size)
                <option value="{{$size->id}}">{{$size->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-4">
        <p class="text-xl text-gray-700">Color: </p>
        <select wire:model="color_id" class="form-control w-full">
            <option value="" selected disabled>Seleccione un color</option>
            @foreach ($colors as $color)
                <option value="{{$color->id}}">{{$color->name}}</option>
            @endforeach
        </select>
    </div>

    @if ($quantity > 0)
        <p class="text-gray-700 mt-4">
            <span class="font-semibold text-lg">Stock Disponible: </span> {{$quantity}}
        </p>
    @else
    <p class="text-gray-700 mt-4">
        <span class="font-semibold text-lg">No hay stock disponible para este color y talla</span>
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
            <x-button-add color="gray"
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
