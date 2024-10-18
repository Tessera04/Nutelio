@extends('layouts.app')

@section('titulo_window')
    Tabla Pacientes
@endsection

@section('titulo')
    Tabla Pacientes
@endsection

@section('contenido')
    <div class="w-screen flex flex-col justify-center items-center pt-10">
        <div class="p-4 ">
            <a href="{{ route('paciente') }}" class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm uppercase font-bold cursor-pointer">
                              
                Crear Paciente
    
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-green-nutelio">
                    <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                </svg>                              
            </a>
        </div>

        <table class="table table-bordered table-auto bg-white border border-gray-300 rounded shadow-md">
            <thead class="bg-green-nutelio text-beige-nutelio uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-4 text-center">Editar</th>
                    <th class="py-3 px-4 text-left">ID</th>
                    <th class="py-3 px-4 text-left">Nombre</th>
                    <th class="py-3 px-4 text-left">Apellido</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Telefono</th>
                    <th class="py-3 px-2 text-left">Provincia</th>
                    <th class="py-3 px-4 text-left">Localidad</th>
                    <th class="py-3 px-4 text-left">Direccion</th>
                    <th class="py-3 px-4 text-left">DNI</th>
                    <th class="py-3 px-4 text-center">Eliminar</th>
                    <th class="py-3 px-4 text-center">Perfil</th>
                    <th class="py-3 px-4 text-center">Mensaje</th>
                </tr>
            </thead>
            <tbody class="text-brown-nutelio text-sm font-light">
                @foreach ($pacientes as $paciente)
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-4 text-xl font-medium">
                            <x-button-table :route="route('paciente.editar', $paciente->id)" class="w-full bg-red-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-brown-nutelio">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                </svg>                                                                   
                            </x-button-table>
                        </td>
                        <td class="py-3 px-4 text-md font-medium">{{ $paciente->id }}</td>
                        <td class="py-3 px-4 text-md font-medium">{{ $paciente->name }}</td>
                        <td class="py-3 px-4 text-md font-medium">{{ $paciente->surname }}</td>
                        <td class="py-3 px-4 text-md font-medium">{{ $paciente->email }}</td>
                        <td class="py-3 px-4 text-md font-medium">{{ $paciente->phone }}</td>
                        <td class="py-3 px-2 text-md font-medium text-pretty">{{ $paciente->provincia->province_name }}</td>
                        <td class="py-3 px-4 text-md font-medium">{{ $paciente->location }}</td>
                        <td class="py-3 px-4 text-md font-medium">{{ $paciente->address }}</td>
                        <td class="py-3 px-4 text-md font-medium">{{ $paciente->dni }}</td>
                        <td class="py-3 px-4 text-2xl">
                            <form action="{{ route('paciente.destroy', ['paciente' => $paciente->id]) }}" method="POST" class="w-full inline-flex">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full bg-red-200 hover:bg-red-700 transition shadow-lg hover:shadow-2xl py-2 px-4 text-center rounded-md focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-red-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                        <td class="py-3 px-4 text-2xl">
                            <x-button-table class="w-full" :route="route('perfil-paciente', ['paciente' => $paciente->id])">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-brown-nutelio">
                                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                </svg>                                                                  
                            </x-button-table>
                        </td>
                        <td class="py-3 px-4 text-2xl">
                            <form action="{{ route('send') }}" method="POST" class="w-full inline-flex">
                                @csrf
                                <button type="submit" class="w-full bg-beige-nutelio hover:bg-beige-dark-nutelio transition shadow-lg hover:shadow-2xl py-2 px-4 text-center justify-center rounded-md focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M12 2.25c-2.429 0-4.817.178-7.152.521C2.87 3.061 1.5 4.795 1.5 6.741v6.018c0 1.946 1.37 3.68 3.348 3.97.877.129 1.761.234 2.652.316V21a.75.75 0 0 0 1.28.53l4.184-4.183a.39.39 0 0 1 .266-.112c2.006-.05 3.982-.22 5.922-.506 1.978-.29 3.348-2.023 3.348-3.97V6.741c0-1.947-1.37-3.68-3.348-3.97A49.145 49.145 0 0 0 12 2.25ZM8.25 8.625a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Zm2.625 1.125a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875-1.125a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" clip-rule="evenodd" />
                                    </svg>                                       
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection