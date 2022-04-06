@props(['product'])

<li class="bg-white rounded-lg shadow mb-4"> 
    <article class="flex">
        <figure>
            <img src="{{Storage::url($product->images->first()->url)}}" class="h-48 w-56 object-cover object-center">
        </figure>
        <div class="flex-1 py-4 px-6 flex flex-col">
            <div class="flex justify-between">
                <div>
                    <h1 class="text-lg font-semibold text-gray-700">{{$product->name}}</h1>
                    <p class="font-bold text-gray-700"> GS. {{$product->price}} </p>
                </div>

                <div class="mt-auto mb-4">
                    <a href="{{route('product.show', $product)}}">
                        <x-jet-button>
                            Mas Información
                        </x-jet-button>      
                    </a>
                </div>
            </div>
        </div>
    </article>
</li>