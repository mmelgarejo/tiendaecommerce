<div class="container py-8">
    @if (Cart::count())

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" 
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col" 
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Precio
                    </th>
                    <th scope="col" 
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Cantidad
                    </th>
                    <th scope="col" 
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Total
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @foreach (Cart::content() as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img src="{{$item->options->image}}" class="h-10 w-10 object-cover object-center rounded-full">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{$item->name}}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">
                                <span>{{$item->price}}</span>
                                <a class="ml-6 cursor-pointer hover:text-red-600"
                                    wire:click="destroyItem('{{$item->rowId}}')"
                                    wire:loading.class="text-red-600 opacity-25"
                                    wire:target="destroyItem('{{$item->rowId}}')"> 
                                    <i class="fas fa-trash"></i>  
                                </a>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">
                                <span>{{$item->qty}}</span>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">
                                <span>{{$item->price * $item->qty}}</span>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        
    @else
        <div class="flex flex-col items-center">
            <p class="text-lg text-gray-700 font-semibold"> No hay productos en el carrito de compras </p>
            <a href="/">
                <x-button-add>
                    Volver al inicio
                </x-button-add>
            </a> 
        </div>
    @endif
</div>
