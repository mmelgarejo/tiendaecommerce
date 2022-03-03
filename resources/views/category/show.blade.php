<x-app-layout>

    <div class="container py-8">
        <h1 class="text-lg text-center"> {{$category->name}} </h1>
        <div class="grid grid-cols-4 gap-4 mb-4 py-2">
            @foreach ($products as $product)
                <div class="text-center bg-white rounded-lg shadow mb-4">
                    <article>
                        <figure>
                            <img src="{{Storage::url($product->images->first()->url)}}" alt="" class="h-80 w-full object-cover object-center">
                        </figure>
                        <h1 class="text-lg font-semibold ">
                            <a href="">
                                {{Str::limit($product->name, 20)}}
                            </a>
                        </h1>
                        <p class="font-bold text-gray-700">US$ {{$product->price}}</p>
                    </article>
                </div>
            @endforeach
        </div>     
    </div>

</x-app-layout>