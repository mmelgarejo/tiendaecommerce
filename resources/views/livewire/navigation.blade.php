<header class="bg-gray-800 sticky top-0 z-50" x-data='dropdown()'>
    <div class="container flex items-center h-16 justify-between md:justify-start">
        <a
            x-on:click="show()"
            class="flex flex-col items-center justify-center order-last md:order-first bg-white bg-opacity-25 text-white cursor-pointer font-semibold h-full px-6 md:px-4">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <span class="text-sm hidden md:block">Categorías</span>
        </a>

        <a href="/" class="mx-6">
            <x-jet-application-mark class="block h-9 w-auto" />
        </a>

        <div class="flex-1 hidden md:block">
            @livewire('search')
        </div>

        <div class="relative mx-6 hidden md:block">
            @auth
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

                        @can('admin.index')
                            <x-jet-dropdown-link href="{{ route('admin.index') }}">
                                {{ __('Administrador') }}
                            </x-jet-dropdown-link>
                        @endcan

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
            @else
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class="fas fa-user-circle text-white cursor-pointer" style="font-size: 1.875rem; line-height: 2.25rem"></i>
                    </x-slot>

                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Acceder') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Registrarse') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>

       <div class="hidden md:block">
            @livewire('dropdown-cart')
       </div>

    </div>
    <nav id="navigation-menu"
        x-show="open"
        x-cloak
        class="bg-gray-700 bg-opacity-25 absolute w-full">
        {{-- Menu Computadora --}}
        <div class="container h-full hidden md:block">
            
            <div 
                x-on:click.away="close()"
                class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    @foreach ($categories as $category)
                        <li class="navigation-link text-gray-500 hover:bg-orange-500 hover:text-white">
                            <a href="{{route('category.show', $category)}}" class="py-2 px-4 text-sm flex items-center">
                                <span class="flex justify-center w-9">
                                    {!!$category->icon!!}
                                </span>
                                {{$category->name}}
                            </a>
                            <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                                <x-navigation-subcategories :category="$category" />
                            </div>
                        </li>
                    @endforeach
                </ul>



                <div class="col-span-3 bg-gray-100">
                    <x-navigation-subcategories :category="$categories->first()" />        
                </div>
            </div>
        </div>

        {{-- Menu Mobile --}}

        <div class="bg-white h-full overflow-y-auto">
            <div class="container bg-gray-200 py-3 mb-2">
                @livewire('search')
            </div>
            <ul>
                @foreach ($categories as $category)
                <li class="text-gray-500 hover:bg-orange-500 hover:text-white">
                    <a href="{{route('category.show', $category)}}}" class="py-2 px-4 text-sm flex items-center">
                        <span class="flex justify-center w-9">
                            {!!$category->icon!!}
                        </span>
                        {{$category->name}}
                    </a>
                </li>
                @endforeach
            </ul>

            <p class="text-gray-500 px-6 my-2">
                USUARIOS
            </p>

            @livewire('cart-mobil')
            
            @auth
                <a href="{{route('profile.show')}}" class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-orange-500 hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="far fa-address-card"></i>
                    </span>
                    Perfil
                </a>

                <a href="" 
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                    class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-orange-500 hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </span>
                    Cerrar Sesion
                </a>

                <form id="logout-form" action="{{route('logout')}}" method="POST" class="hidden">
                    @csrf

                </form>
            @else
            <a href="{{route('login')}}" class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-orange-500 hover:text-white">
                <span class="flex justify-center w-9">
                    <i class="fa-solid fa-user"></i>
                </span>
                Iniciar Sesion
            </a>

            <a href="{{route('register')}}" class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-orange-500 hover:text-white">
                <span class="flex justify-center w-9">
                    <i class="far fa-address-card"></i>
                </span>
                Registrarse
            </a>


            @endauth

        </div>
    </nav>
</header>

