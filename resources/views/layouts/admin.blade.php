<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Tienda Ecommerce') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">

        <!-- Glider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.min.css" integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- FlexSilder -->

        <link rel="stylesheet" href="{{asset('vendor/FlexSlider/flexslider.css')}}">



        @livewireStyles
        @powerGridStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        {{-- Glider --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.min.js" integrity="sha512-RidPlemZ+Xtdq62dXb81kYFycgFQJ71CKg+YbKw+deBWB0TLIqCraOn6k0CWDH2rGvE1a8ruqMB+4E4OLVJ7Dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        {{-- Jquery --}}
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        {{-- FlexSlider --}}

        <script src="{{asset('vendor/FlexSlider/jquery.flexslider-min.js')}}"></script>

  </head>
  <body>
    <div class="relative min-h-screen md:flex">
        {{-- Menu Mobile --}}

        <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
            <a href="#" class="block p-4 text-white font-bold">Tienda Ecommerce</a>

            <button class="mobile-menu-button py-4 focus:outline-none focus:bg-gray-700">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        {{-- Menu Web --}}
        <div class="sidebar bg-blue-800 text-blue-100 w-64 space-y-6 px-2 py-7 absolute inset-y-0 left-0 transform -translate-x-full transition duration-200 ease-in-out md:relative md:translate-x-0">

            <a href="{{route('admin.index')}}" class="text-white flex items-center space-x-2">
                <span class="text-2xl font-extrabold">Tienda Ecommerce</span> 
            </a>

            <nav>
                <a href="{{ route('admin.index') }}" class="block py-2.5 px-4 hover:bg-blue-700 rounded hover:text-white transition duration-200">
                    <i class="fas fa-home"></i>
                    <span class="ml-2">Inicio</span> 
                </a>
                <a href="{{ route('user.list') }}" class="block py-2.5 px-4 hover:bg-blue-700 rounded hover:text-white transition duration-200">
                    <i class="fas fa-user"></i>
                    <span class="ml-2">Usuarios</span>
                </a>
                <a href="{{ route('product.list') }}" class="block py-2.5 px-4 hover:bg-blue-700 rounded hover:text-white transition duration-200">
                    <i class="fas fa-luggage-cart"></i>
                    <span>Productos</span> 
                </a>
                <a href="#" class="block py-2.5 px-4 hover:bg-blue-700 rounded hover:text-white transition duration-200">
                    <i class="fas fa-copyright"></i>
                    <span>Marcas</span> 
                </a>
                <a href="#" class="block py-2.5 px-4 hover:bg-blue-700 rounded hover:text-white transition duration-200">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Pedidos</span> 
                </a>
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="ml-2 mt-2 flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Administrar Cuenta') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Perfil') }}
                        </x-jet-dropdown-link>

                        <div class="border-t border-gray-100"></div>

                        
                        <x-jet-dropdown-link href="{{ route('welcome') }}">
                            {{ __('Tienda') }}
                        </x-jet-dropdown-link>
                        

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </nav>
        </div>
        <div class="flex-1 m-8">
            @yield('content')
        </div>
        
    </div>
    <script>
        const btn = document.querySelector('.mobile-menu-button');
        const sidebar = document.querySelector('.sidebar');

        btn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });   

    </script>
    @yield('script')
    @livewireScripts
    @livewire('livewire-ui-modal')
    @powerGridScripts
  </body>
</html>
