@extends('layouts.app')

@section('titulo_window')
    @if(isset($data))
        Editar Datos Biometricos
    @else
        Crear Datos Biometricos
    @endif
@endsection

@section('titulo')
    @if(isset($data))
        Editar Datos Biometricos
    @else
        Crear Datos Biometricos
    @endif
@endsection

@section('contenido')
<div class="w-screen">
    <!-- Para creación -->
    <form action="{{ route('datos-biometricos.guardar') }}" method="POST" novalidate>
    @csrf
    <div class="w-full h-full flex flex-col items-center justify-center bg-beige-nutelio">

        <div class="grid grid-cols-1 gap-4 mb-4 text-2xl mt-5 w-3/4">
            <label class="text-brown-nutelio font-bold pl-1" for="paciente_id">Paciente:</label>
            <select name="paciente_id" id="paciente_id" class="rounded-md hover:cursor-pointer px-3 py-2 shadow-md">
                @foreach ($pacientes as $paciente)
                    <option value="{{ $paciente->id }}">
                        {{ $paciente->name . ' ' . $paciente->surname }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
            <label class="text-brown-nutelio font-bold pl-1" for="height">Altura:</label>
            <input 
                class="rounded-md hover:cursor-pointer px-3 py-2 shadow-md" 
                type="number" 
                min="0" 
                max="1" 
                step="0.01"
                id="height" 
                name="height" 
                pattern="^\d{1,3}(\.\d{0,2})?$"
                maxlength="6"
                placeholder="Altura"
                required>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
            <label class="text-brown-nutelio font-bold pl-1" for="weight">Peso:</label>
            <input 
                class="rounded-md hover:cursor-pointer px-3 py-2 shadow-md" 
                type="number" 
                min="0" 
                max="1" 
                step="0.01"
                id="weight" 
                name="weight" 
                placeholder="Peso"
                required>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
            <label class="text-brown-nutelio font-bold pl-1" for="body_fat_percentage">Porcentaje de grasa corporal:</label>
            <input 
                class="rounded-md hover:cursor-pointer px-3 py-2 shadow-md" 
                type="number" 
                min="0" 
                max="1" 
                step="0.01"
                id="body_fat_percentage" 
                name="body_fat_percentage" 
                placeholder="Porcentaje de grasa corporal"
                required>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
            <label class="text-brown-nutelio font-bold pl-1" for="muscle_mass_percentage">Porcentaje de masa muscular:</label>
            <input 
                class="rounded-md hover:cursor-pointer px-3 py-2 shadow-md" 
                type="number" 
                min="0" 
                max="1" 
                step="0.01"
                id="muscle_mass_percentage" 
                name="muscle_mass_percentage" 
                placeholder="Porcentaje de masa muscular"
                required>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
            <label class="text-brown-nutelio font-bold pl-1" for="waist_circumference">Circunferencia de cadera:</label>
            <input 
                class="rounded-md hover:cursor-pointer px-3 py-2 shadow-md" 
                type="number" 
                min="0" 
                max="200" 
                step="0.01"
                id="waist_circumference" 
                name="waist_circumference" 
                placeholder="Circunferencia de cadera"
                required>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
            <label class="text-brown-nutelio font-bold pl-1" for="hip_circumference">Circunferencia de cintura:</label>
            <input 
                class="rounded-md hover:cursor-pointer px-3 py-2 shadow-md" 
                type="number" 
                min="0" 
                max="200" 
                step="0.01"
                id="hip_circumference" 
                name="hip_circumference" 
                placeholder="Circunferencia de cintura"
                required>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
            <label class="text-brown-nutelio font-bold pl-1" for="chest_circumference">Circunferencia de pecho:</label>
            <input 
                class="rounded-md hover:cursor-pointer px-3 py-2 shadow-md" 
                type="number" 
                min="0" 
                max="200" 
                step="0.01"
                id="chest_circumference" 
                name="chest_circumference" 
                placeholder="Circunferencia de pecho"
                required>
        </div>

        <div class="grid grid-cols-1 gap-4 mb-4 text-2xl w-3/4">
            <label class="text-brown-nutelio font-bold pl-1" for="gender">Sexo biologico:</label>
            <select name="gender" id="gender" class="rounded-md hover:cursor-pointer px-3 py-2 shadow-md">
                    <option value="1">
                        Masculino
                    </option>
                    <option value="2">
                        Femenino
                    </option>
            </select>
        </div>

        <input type="submit" 
        value="Cargar Datos Biometricos"
        class="bg-green-nutelio hover:bg-beige-dark-nutelio transition-colors cursor-pointer uppercase font-bold mt-4 px-10 py-3 text-beige-nutelio rounded-lg"/>
    </div>
    </form>
</div>
@endsection