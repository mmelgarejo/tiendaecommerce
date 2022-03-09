<div wire:init="loadPosts">
    @if (count($products))
        
    
        <div class="glider-contain">
            <ul class="glider-{{$category->id}}">
                @foreach ($products as $product)
                    <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'sm: mr-3'}}">
                        <article>
                            <figure>
                                <img src="{{Storage::url($product->images->first()->url)}}" alt="" class="h-48 w-full object-cover object-center">
                            </figure>

                            <div class="py-4 px-6">
                                <h1 class="text-lg font-semibold ">
                                    <a href="{{route('product.show', $product)}}">
                                        {{Str::limit($product->name, 20)}}
                                    </a>
                                </h1>
                                <p class="font-bold text-gray-700">US$ {{$product->price}}</p>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ul>
        
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
        </div>

    @else
        
       
        
    @endif
    
</div>
