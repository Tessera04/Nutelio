@extends('layouts.app')

@section('titulo_window')
    Crear Cuenta
@endsection

@section('contenido')
    <div class="relative flex ">
        <div class="w-full">
            <img src="{{ asset('img/login_picture.jpg') }}" alt="Login picture">
        </div>

        <div class="bg-green-nutelio w-full">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="flex flex-col items-center justify-center h-screen">

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="name">Nombre:</label>
                        <input class="rounded-md hover:cursor-pointer" type="text" id="name" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="name">Apellido:</label>
                        <input class="rounded-md hover:cursor-pointer" type="text" id="name" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="user">Usuario:</label>
                        <input class="rounded-md hover:cursor-pointer" type="text" id="user" name="user" value="{{ old('user') }}" required>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="name">E-mail:</label>
                        <input class="rounded-md hover:cursor-pointer" class="rounded hover:cursor-pointer" type="email" id="name" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="name">Contraseña:</label>
                        <input class="rounded-md hover:cursor-pointer" type="password" id="name" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mb-4 text-2xl">
                        <label class="text-beige-nutelio font-bold" for="name">Repetir contraseña:</label>
                        <input class="rounded-md hover:cursor-pointer" type="password" id="name" name="name" value="{{ old('name') }}" required>
                    </div>

                    <input type="submit" 
                    value="Crear Cuenta" 
                    class="bg-beige-nutelio hover:bg-beige-dark-nutelio transition-colors cursor-pointer uppercase font-bold mt-4 px-10 py-3 text-green-nutelio rounded-lg"/>
                </div>
            </form>
        </div>
    </div>
@endsection