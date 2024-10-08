@extends('layouts.app')

@section('titulo_window')
    Perfil Paciente
@endsection

@section('titulo')
    Perfil Paciente
@endsection

@section('contenido')
    <div class="w-screen grid grid-cols-8 gap-4 justify-center items-center pt-10">
        <div class="bg-white px-10 py-16 rounded-2xl col-span-2 col-start-2">
            <h1 class="text-3xl font-bold text-center"> {{ $paciente->name }} </h1>
            <h1 class="text-3xl font-bold text-center"> {{ $paciente->surname }} </h1>

            <h2 class="text-lg pt-2">Email:</h2>
            <input 
                type="text" 
                value="{{ $paciente->email }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />


            <h2 class="text-lg pt-2">Telefono:</h2>
            <input 
                type="text" 
                value="{{ $paciente->phone }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />

            <h2 class="text-lg pt-2">Provincia:</h2>
            <input 
                type="text" 
                value="{{ $paciente->provincia->province_name }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />

            <h2 class="text-lg pt-2">Localidad:</h2>
            <input 
                type="text" 
                value="{{ $paciente->location }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />

            <h2 class="text-lg pt-2">Direccion:</h2>
            <input 
                type="text" 
                value="{{ $paciente->address }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />

            <h2 class="text-lg pt-2">DNI:</h2>
            <input 
                type="text" 
                value="{{ $paciente->dni }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />

            <a href="{{ route('paciente.editar', $paciente->id) }}" class="flex items-center justify-center gap-2 bg-white border p-2 mt-6 text-gray-600 rounded text-sm uppercase font-bold cursor-pointer">
                              
                Editar Paciente

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-green-nutelio">
                    <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                </svg>                              
            </a>
        </div>

        <div class="bg-white px-10 py-16 rounded-2xl col-span-4 col-start-4">
            <h1 class="text-3xl font-bold text-center"> {{ $paciente->name }} </h1>
            <h1 class="text-3xl font-bold text-center"> {{ $paciente->surname }} </h1>

            <h2 class="text-lg pt-2">Email:</h2>
            <input 
                type="text" 
                value="{{ $paciente->email }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />


            <h2 class="text-lg pt-2">Telefono:</h2>
            <input 
                type="text" 
                value="{{ $paciente->phone }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />

            <h2 class="text-lg pt-2">Provincia:</h2>
            <input 
                type="text" 
                value="{{ $paciente->provincia->province_name }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />

            <h2 class="text-lg pt-2">Localidad:</h2>
            <input 
                type="text" 
                value="{{ $paciente->location }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />

            <h2 class="text-lg pt-2">Direccion:</h2>
            <input 
                type="text" 
                value="{{ $paciente->address }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />

            <h2 class="text-lg pt-2">DNI:</h2>
            <input 
                type="text" 
                value="{{ $paciente->dni }}" 
                readonly 
                class="border border-beige-dark-nutelio rounded-lg p-2 bg-beige-nutelio text-gray-700 cursor-not-allowed w-full focus:outline-none"
            />

            <a href="{{ route('paciente.editar', $paciente->id) }}" class="flex items-center justify-center gap-2 bg-white border p-2 mt-6 text-gray-600 rounded text-sm uppercase font-bold cursor-pointer">
                              
                Editar Paciente

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-green-nutelio">
                    <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                </svg>                              
            </a>
        </div>
    </div>
@endsection