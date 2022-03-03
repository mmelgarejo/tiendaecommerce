<x-app-layout>

    <div class="container py-8">
        <h1 class="text-lg text-center"> {{$category->name}} </h1>
        
        @livewire('category-filter', ['category' => $category])
    </div>

</x-app-layout>