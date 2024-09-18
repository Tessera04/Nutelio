@extends('layouts.app')

@section('titulo_window')
    Crear Paciente
@endsection

@section('titulo')
    Crear Paciente
@endsection

@section('contenido')
<div class="w-screen">
    <form action="{{ route('register') }}" method="POST" novalidate>
        @csrf
        <div class="w-full h-full flex flex-col items-center justify-center bg-beige-nutelio">
            
            <div class="grid grid-cols-1 gap-4 mb-4 text-2xl mt-5 w-3/4">
                <label class="text-brown-nutelio font-bold pl-1" for="name">Nombre/s:</label>
                <input 
                    class="rounded-md hover:cursor-pointer px-3 py-2" 
                    type="text" 
                    id="name" 
                    name="name" 
                    value="{{ old('name') }}"
                    placeholder="Nombre/s"
                    required>
            </div>

            <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
                <label class="text-brown-nutelio font-bold pl-1" for="surname">Apellido/s:</label>
                <input 
                    class="rounded-md hover:cursor-pointer px-3 py-2" 
                    type="text" 
                    id="surname" 
                    name="surname" 
                    value="{{ old('surname') }}"
                    placeholder="Apellido/s"
                    required>
            </div>

            <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
                <label class="text-brown-nutelio font-bold pl-1" for="email">E-mail:</label>
                <input 
                    class="rounded-md hover:cursor-pointer px-3 py-2" 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}"
                    placeholder="E-mail"
                    required>
            </div>

            
            <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
                <label class="text-brown-nutelio font-bold pl-1" for="phone">Telefono:</label>
                <input 
                    class="rounded-md hover:cursor-pointer px-3 py-2" 

                    type="tel" 
                    id="phone" 
                    name="phone" 
                    value="{{ old('phone') }}" 
                    placeholder="Telefono"
                    required>
            </div>

            <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
                <label class="text-brown-nutelio font-bold pl-1" for="province">Provincia:</label>
                <select name="province" id="province" class="rounded-md hover:cursor-pointer px-3 py-2">
                    @foreach ($provincias as $provincia)
                        <option value="{{ $provincia->id }}">{{ $provincia->province_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
                <label class="text-brown-nutelio font-bold pl-1" for="location">Localidad:</label>
                <input 
                    class="rounded-md hover:cursor-pointer px-3 py-2" 

                    type="text" 
                    id="location" 
                    name="location" 
                    value="{{ old('location') }}" 
                    placeholder="Localidad"
                    required>
            </div>

            <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
                <label class="text-brown-nutelio font-bold pl-1" for="address">Direccion:</label>
                <input 
                    class="rounded-md hover:cursor-pointer px-3 py-2" 

                    type="text" 
                    id="address" 
                    name="address" 
                    value="{{ old('address') }}" 
                    placeholder="Direccion"
                    required>
            </div>

            <div class="grid grid-cols-1 gap-4 mb-4 text-2xl pb-4 w-3/4">
                <label class="text-brown-nutelio font-bold pl-1" for="dni">Dni:</label>
                <input 
                    class="rounded-md hover:cursor-pointer px-3 py-2" 

                    type="text" 
                    id="dni" 
                    name="dni" 
                    value="{{ old('dni') }}" 
                    placeholder="DNI"
                    required>
            </div>

            <input type="submit" 
            value="Crear Paciente" 
            class="bg-green-nutelio hover:bg-beige-dark-nutelio transition-colors cursor-pointer uppercase font-bold mt-4 px-10 py-3 text-beige-nutelio rounded-lg"/>
        </div>
    </form>
</div>
@endsection