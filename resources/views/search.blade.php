<x-app-layout>
    <div class="py-2">
        <h1>Aqui esta los resultados de la busqueda de productos</h1>
        <ul class="mt-2">
            @foreach ($products as $product)
                <li>
                    <p>{{$product->name}}</p>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>