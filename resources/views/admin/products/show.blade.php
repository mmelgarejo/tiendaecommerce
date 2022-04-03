@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <div>
        <div class="grid grid-cols-2 gap-6">   
            <div class="flexslider">
                <ul class="slides">
                    @foreach ($product->images as $image)
                        <li data-thumb=" {{ Storage::url($image->url) }}">
                            <img src=" {{ Storage::url($image->url) }}" />
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h1 class="text-lg mt-2">{{$product->name}}</h1>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="grid grid-cols-3 gap-3">
                <button class="text-white bg-blue-700 hover:bg-blue-800 rounded shadow p-2 w-24">Editar</button>
                <button class="text-white bg-gray-500 hover:bg-gray-600 rounded shadow p-2 w-24">Auditoria</button>
                <button class="text-white bg-red-500 hover:bg-red-600 rounded shadow p-2 w-24">Eliminar</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
@endsection