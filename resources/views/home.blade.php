@extends('layouts.app')

@section('titulo_window')
    Home
@endsection

@section('contenido')
    <!--Imagen con titulo-->
    <div class="relative w-full flex shadow-lg" style="height: 50rem">
        <img class="brightness-75 w-full object-cover object-center" src="{{ asset('img/home-page.jpg') }}" alt="Home image">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-beige-nutelio text-6xl font-bold mb-5">Nutelio</h1>
            <p class="text-white">Hola mis causas como andan</p>
        </div>
    </div>

    <hr>

    <!--Pequeño parrafo en el medio-->
    <div class="flex justify-center text-green-nutelio mt-10">
        <h1 class="text-5xl font-bold">Estamos para ayudarte</h1>
    </div>

    <!--Tarjetas-->
    <div class="mt-10 mx-20">
        <div class="grid grid-cols-3 gap-10 sm:grid-cols-2 lg:grid-cols-3">
            @foreach(['Estado de salud', 'Cuidado Especializado', 'Herramientas para nutricionistas', 'Compromiso', 'Cuidado Integral', 'Servicio de calidad'] as $service)
                <div class="bg-white overflow-hidden shadow-xl rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-xl font-medium text-green-nutelio">{{ $service }}</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection