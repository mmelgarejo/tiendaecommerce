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
  <body class="bg-gray-100">
    <div class="bg-white flex p-6 shadow-sm">
        <h6 class="flex-grow text-2xl font-bold">Tienda Ecommerce</h6>
        <x-jet-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button
                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
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
    </div>
    <div class="flex h-screen">
        <div class="p-6 border-r w-64 hidden md:block bg-gray-400">
            <ul>
                <a href="">
                    <li class="mb-8 flex">
                        <div class="shadow-sm p-2 mr-3 rounded-lg">
                            <i class="fas fa-door-open"></i>
                        </div>
                        
                        <span class="self-center"> Inicio </span> 
                    </li>
                </a>
                <a href="">
                    <li class="mb-8 flex">
                        <div class="shadow-sm p-2 mr-3 rounded-lg">
                            <i class="fas fa-user"></i>
                        </div>    
                        <span class="self-center"> Usuarios </span> 
                    </li>
                </a>
                <a href="">
                    <li class="mb-8 flex">
                        <div class="shadow-sm p-2 mr-3 rounded-lg">
                            <i class="fab fa-product-hunt"></i>
                        </div>
                        <span class="self-center"> Productos </span> 
                    </li>
                </a>
                <a href="">
                    <li class="mb-8 flex">
                        <div class="shadow-sm p-2 mr-3 rounded-lg">
                            <i class="fas fa-copyright"></i>
                        </div>
                        <span class="self-center"> Marcas </span> 
                    </li>
                </a>
                <a href="">
                    <li class="mb-8 flex">
                        <div class="shadow-sm p-2 mr-3 rounded-lg">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <span class="self-center"> Pedidos </span> 
                    </li>
                </a>
            </ul>
        </div>
        @yield('content')
    </div>
    @livewireScripts
    @powerGridScripts
  </body>
</html>
