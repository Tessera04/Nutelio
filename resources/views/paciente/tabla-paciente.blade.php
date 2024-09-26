@extends('layouts.app')

@section('titulo_window')
    Tabla Pacientes
@endsection

@section('titulo')
    Tabla Pacientes
@endsection

@section('contenido')
    <div class="w-screen flex justify-center items-center pt-10">
        <table class="table table-bordered table-auto bg-white border border-gray-300 rounded shadow-md">
            <thead class="bg-green-nutelio text-beige-nutelio uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-6 text-center">Editar</th>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Nombre</th>
                    <th class="py-3 px-6 text-left">Apellido</th>
                    <th class="py-3 px-6 text-left">Email</th>
                    <th class="py-3 px-6 text-left">Telefono</th>
                    <th class="py-3 px-6 text-left">Provincia</th>
                    <th class="py-3 px-6 text-left">Localidad</th>
                    <th class="py-3 px-6 text-left">Direccion</th>
                    <th class="py-3 px-6 text-left">DNI</th>
                    <th class="py-3 px-6 text-center">Eliminar</th>
                </tr>
            </thead>
            <tbody class="text-brown-nutelio text-sm font-light">
                @foreach ($pacientes as $paciente)
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6 text-xl font-medium">
                            <x-button-sidebar class="w-full bg-red-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-brown-nutelio">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                </svg>                                                                   
                            </x-button-sidebar>
                        </td>
                        <td class="py-3 px-6 text-xl font-medium">{{ $paciente->id }}</td>
                        <td class="py-3 px-6 text-xl font-medium">{{ $paciente->name }}</td>
                        <td class="py-3 px-6 text-xl font-medium">{{ $paciente->surname }}</td>
                        <td class="py-3 px-6 text-xl font-medium">{{ $paciente->email }}</td>
                        <td class="py-3 px-6 text-xl font-medium">{{ $paciente->phone }}</td>
                        <td class="py-3 px-6 text-xl font-medium">{{ $paciente->provincia->province_name }}</td>
                        <td class="py-3 px-6 text-xl font-medium">{{ $paciente->location }}</td>
                        <td class="py-3 px-6 text-xl font-medium">{{ $paciente->address }}</td>
                        <td class="py-3 px-6 text-xl font-medium">{{ $paciente->dni }}</td>
                        <td class="py-3 px-6 text-2xl">
                            <x-button-sidebar class="w-full bg-red-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-red-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>                                  
                            </x-button-sidebar>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection