@extends('layouts.app')

@section('titulo_window')
    Crear Cuenta
@endsection

@section('contenido')
    <div class="relative flex">
        <div class="w-full">
            <img src="{{ asset('img/register-picture.jpg') }}" alt="Register picture">
        </div>

        <div class="bg-green-nutelio w-full">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="flex flex-col items-center justify-center h-screen">

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="name">Nombre:</label>
                        <input 
                            class="rounded-md hover:cursor-pointer px-3 py-2" 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            placeholder="Nombre"
                            required>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="surname">Apellido:</label>
                        <input 
                            class="rounded-md hover:cursor-pointer px-3 py-2" 
                            type="text" 
                            id="surname" 
                            name="surname" 
                            value="{{ old('surname') }}"
                            placeholder="Apellido"
                            required>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="username">Usuario:</label>
                        <input 
                            class="rounded-md hover:cursor-pointer px-3 py-2" 

                            type="text" 
                            id="username" 
                            name="username" 
                            value="{{ old('username') }}" 
                            placeholder="Usuario"
                            required>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="email">E-mail:</label>
                        <input 
                            class="rounded-md hover:cursor-pointer px-3 py-2" 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            placeholder="E-mail"
                            required>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="password">Contraseña:</label>
                        <input 
                            class="rounded-md hover:cursor-pointer px-3 py-2" 
                            type="password" 
                            id="password" 
                            name="password"
                            placeholder="Tu contraseña"
                            required>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="password_confirmation">Repetir contraseña:</label>
                        <input 
                            class="rounded-md hover:cursor-pointer px-3 py-2" 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation"
                            placeholder="Repite tu contraseña" 
                            required>
                    </div>

                    <input type="submit" 
                    value="Crear Cuenta" 
                    class="bg-beige-nutelio hover:bg-beige-dark-nutelio transition-colors cursor-pointer uppercase font-bold mt-4 px-10 py-3 text-green-nutelio rounded-lg"/>
                </div>
            </form>
        </div>
    </div>
@endsection