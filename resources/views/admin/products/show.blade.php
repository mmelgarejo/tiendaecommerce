@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <div>
        <h1>Aqui se podra visualizar al producto: {{$product->name}}</h1>
    </div>
@endsection