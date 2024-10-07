<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Nutelio - @yield('titulo_window')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>
    <body class="bg-white">
        <header class="p-5 border-b shadow bg-beige-nutelio">
            <div class="container mx-auto flex justify-between items-center">
                
                @auth
                
                    <div class="flex">
                        <button class="px-4" id="abrirButton">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                            </svg>    
                        </button>

                        <a href="{{ route('menu') }}" class="text-3xl font-bold text-green-nutelio">Nutelio</a>
                    </div>

                    <nav class="flex items-center gap-2">
                        <a href="{{ route('paciente') }}" class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm uppercase font-bold cursor-pointer">
                              
                            Crear Paciente

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-green-nutelio">
                                <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                            </svg>                              
                        </a>

                        <a class="font-bold uppercase text-gray-600 text-sm px-2" href="{{ route('home', auth()->user()->username ) }}">
                            Hola: 
                            <span class="font-normal"> 
                                {{ auth()->user()->username }} 
                            </span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                                Cerrar Sesion
                            </button>
                        </form>
                    </nav>
                @endauth

                @guest
                    <a href="{{ route('home') }}" class="text-3xl font-bold text-green-nutelio">Nutelio</a>

                    <nav class="flex items-center gap-2">
                        <a class="font-bold uppercase text-green-nutelio text-sm border p-1 rounded" href="{{ route('login') }}">Ingresar</a>
                        <a class="font-bold uppercase bg-green-nutelio text-beige-nutelio text-sm border p-1 rounded" href="{{ route('register') }}">Crear Cuenta</a>
                    </nav>
                @endguest

            </div>
        </header>

        <main class="relative container min-w-full min-h-screen flex">
            @auth
                <!--Sidebar-->
                <div class="absolute min-h-screen md:flex shadow-2xl shadow-green-nutelio ">
                    <aside id="aside" class="bg-green-nutelio text-beige-nutelio hidden w-80 z-10 px-2 py-4 absolute inset-y-0 left-0 md:relative transform md:translate-x-0 overflow-y-auto
                                transition ease-in-out duration-200 shadow-lg">
                        <div class="flex items-center justify-between px-2">

                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-beige-nutelio">
                                    <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
                                </svg>                                  
                                <span class="text-xl font-bold">Herramientas</span>
                            </div>

                            <button type="button" id="cerrarButton" class="inline-flex p-2 items-center justify-center rounded-md bg-beige-nutelio hover:bg-beige-dark-nutelio focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-green-nutelio">
                                    <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>                                  
                            </button>
                        </div>
                        
                        <x-button-sidebar :route="route('tabla-paciente')">
                            Tabla de Pacientes
                        </x-button-sidebar>

                        <x-button-sidebar :route="route('datos-biometricos')">
                            Datos Biometricos
                        </x-button-sidebar>

                        <x-button-sidebar :route="route('paciente')">
                            IMC
                        </x-button-sidebar>

                        <x-button-sidebar :route="route('paciente')">
                            Turnos
                        </x-button-sidebar>

                        <x-button-sidebar :route="route('paciente')">
                            Alimentos
                        </x-button-sidebar>
                    </aside>
                </div>
            @endauth

            <!--Sector principal-->
            <div class="bg-beige-nutelio">
                <h2 class="font-black text-center text-4xl text-brown-nutelio">
                    @yield('titulo')
                </h2>
                    @yield('contenido')
            </div>
        </main>

        <footer class="text-center p-5 text-gray-500 bg-beige-nutelio font-bold uppercase">
            Tessera04 - Nutelio - Todos los derechos reservados {{now()->year}}
        </footer>
    </body>
</html>