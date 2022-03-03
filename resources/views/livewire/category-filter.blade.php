<div>
    <div class="bg-white rounded-lg shadow-lg mb-6">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-gray-700 uppercase">{{$category->name}}</h1>
            

            <div class="hidden md:block grid grid-cols-2 border border-gray-200 divide-x divide-gray-200 text-gray-500">
                <i class="fas fa-border-all p-3 cursor-pointer)"></i>
                <i class="fas fa-th-list p-3 cursor-pointer"></i>
            </div>
        </div>

        <div class="px-6 py-2 justify-between">
            <ul>
                @foreach ($category->subcategories as $subcategory)
                    <li class="py-2 text-sm">
                        <a href="">
                            {{$subcategory->name}}
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        
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
