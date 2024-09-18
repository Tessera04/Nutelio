@extends('layouts.app')

@section('titulo_window')
    Login
@endsection

@section('contenido')
<div class="relative flex min-w-full">
    <div >
        <img src="{{ asset('img/login-picture.jpg') }}" alt="Login picture" class="w-screen h-screen">
    </div>

    <div class="bg-green-nutelio w-full">
        <form action="{{ route('login') }}" method="POST" novalidate>
            @csrf
            <div class="flex flex-col items-center justify-center h-screen">

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

                <input type="submit" 
                value="Ingresar" 
                class="bg-beige-nutelio hover:bg-beige-dark-nutelio transition-colors cursor-pointer uppercase font-bold mt-4 px-10 py-3 text-green-nutelio rounded-lg"/>
            </div>
        </form>
    </div>
</div>
@endsection