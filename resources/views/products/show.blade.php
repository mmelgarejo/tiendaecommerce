<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-2 gap-6">   
            <div class="flexslider">
                <ul class="slides">
                    @foreach ($product->images as $images)
                        <li>
                            <img src="{{Storage::url($images->url)}}" />
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <div class="py-2">
                    <h1 class="text-lg font-semibold"> {{$product->name}} </h1>
                </div>
                <div class="py-2">
                    <h1 class="text-lg font-semibold"> {{$product->description}} </h1>
                </div>
                <div class="py-2">
                    <h1 class="text-md font-semibold"> GS. {{$product->price}} </h1>
                </div>
                <div class="py-2">
                    <h1 class="text-lg font-semibold"> Stock Disponible: {{$product->quantity}} </h1>
                </div>
                <div>
                    <button class="bg-orange-400 rounded shadow w-full hover:bg-orange-500 font-semibold text-lg py-2 px-4">Agregar producto al carrito</button>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide"
                });
            });
        </script>
    @endpush
</x-app-layout>