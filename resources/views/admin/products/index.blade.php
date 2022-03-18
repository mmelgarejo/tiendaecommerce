@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <div class="flex flex-row-reverse">
        <button class="rounded bg-blue-800 shadow hover:bg-blue-700 text-white p-2">
            Registrar Producto
        </button>
    </div>

    <div class="mt-6">
        <livewire:products/>
    </div>
@endsection