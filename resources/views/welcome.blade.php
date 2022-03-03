<x-app-layout>
    <div class="container py-8">
        @foreach ($categories as $category)
            <section class="mb-3">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-gray-700 py-3">
                        {{$category->name}}
                    </h1>
                    <a href="{{route('category.show', $category)}}" class="text-sm ml-2 font-semibold hover:text-orange-400 hover:underline"> Ver más </a>
                </div>
                
                
                @livewire('category-products', ['category' => $category])
            </section>
        @endforeach
        
    </div>
        
        
    @push('script')
        
    
        <script>

            livewire.on('glider', function(id){

                new Glider(document.querySelector('.glider-' + id), {
                    slidesToScroll: 2,
                    slidesToShow: 5.5,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [
                        {
                            // screens greater than >= 775px
                            breakpoint: 640,
                            settings: {
                                // Set to `auto` and provide item width to adjust to viewport
                                slidesToShow: 2.5,
                                slidesToScroll: 2,
                            },

                            breakpoint: 768,
                            settings: {
                                // Set to `auto` and provide item width to adjust to viewport
                                slidesToShow: 3.5,
                                slidesToScroll: 3,
                            },

                            breakpoint: 1024,
                            settings: {
                                // Set to `auto` and provide item width to adjust to viewport
                                slidesToShow: 4.5,
                                slidesToScroll: 4,
                            },

                            breakpoint: 1280,
                            settings: {
                                // Set to `auto` and provide item width to adjust to viewport
                                slidesToShow: 5.5,
                                slidesToScroll: 5,
                            },
                        }
                    ]
                });
            });
        </script>

    @endpush
</x-app-layout>

    

