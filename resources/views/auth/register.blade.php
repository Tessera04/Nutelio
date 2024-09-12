@extends('layouts.app')

@section('titulo_window')
    Crear Cuenta
@endsection

@section('contenido')
    <div class="relative flex w-full">
        <div>
            <img src="{{ asset('img/login_picture.jpg') }}" alt="Login picture">
        </div>

        <div class="bg-green-nutelio w-full">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="grid grid-flow-row gap-4">
                    <div class="grid grid-cols-1 gap-4">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" value="{{ old('name
                        ') }}" required>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <label for="name">Apellido:</label>
                        <input type="text" id="name" name="name" value="{{ old('name
                        ') }}" required>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection