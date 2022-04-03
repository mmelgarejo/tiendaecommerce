<div class="flex-1 relative" x-data>
    <form action="{{route('search')}}" autocomplete="off">
        <x-jet-input name="name" wire:model="search" type="text" class="flex w-full" placeholder="Buscar Producto" />
        <button class="absolute top-0 right-0 w-12 h-full items-center flex justify-center">
            <x-search size="35" />
        </button>
    </form>
    <div class="absolute w-full mt-1 hidden" :class="{ 'hidden' : !$wire.open }" @click.away="$wire.open = false">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="px-4 py-3 space-y-1">
                @forelse ($products as $product)
                    <div class="flex">
                        <img src="{{ Storage::url($product->images()->first()->url) }}" alt="" class="h-12 w-16 object-cover mr-4">
                        <div class="ml-4 text-gray-700">
                            <a href="{{route('product.show', $product)}}">
                                <p class="text-lg font-semibold leading-5">{{$product->name}}</p>
                            </a>
                            <p>Categoria: {{$product->subcategory->category->name}}</p>
                        </div>
                    </div>
                @empty
                    <h1>No se encontraron resultados</h1>
                @endforelse
            </div>
        </div>
    </div>
    
</div>
