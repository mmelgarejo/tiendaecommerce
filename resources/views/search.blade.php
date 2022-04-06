<x-app-layout>
    <div class="container py-8">
        <ul class="mt-2">
            @forelse ($products as $product)
                <x-product-list :product="$product" />
            @empty
                <li class="bg-white rounded shadow-lg">
                    <div class="p-4">
                        <p class="text-lg text-gray-700">
                            No se encontraron resultados para la búsqueda
                        </p>
                    </div>
                </li>
            @endforelse
        </ul>

        {{$products->links()}}
    </div>
</x-app-layout>