<div class="p-2">
    <h1 class="text-lg font-bold">Estas seguro que deseas eliminar el producto? {{$product->name}}</h1>
    <div class="flex justify-center">
        <div class="grid grid-cols-2 gap-2">
            <button
            wire:click="delete" 
            class="text-white bg-red-500 hover:bg-red-600 rounded shadow p-2 w-24">Eliminar</button>
            <button type="button"
            wire:click="close" 
            class="text-white bg-gray-500 hover:bg-gray-600 rounded shadow p-2 w-24">Cancelar</button>
        </div>
    </div>
</div>
