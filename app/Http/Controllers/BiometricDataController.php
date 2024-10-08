<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Models\BiometricData;
use Illuminate\Support\Facades\Auth;

class BiometricDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('biometricData.biometricData');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Filtrar los pacientes por el user_id del usuario autenticado
        $pacientes = Paciente::where('user_id', $userId)->get();

        // Pasar los pacientes filtrados a la vista
        return view('biometricData.biometricData', ['pacientes' => $pacientes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar campos
        $request->validate([
            'paciente_id' => 'required|integer',
            // Altura: entre 0.5 y 2.5 metros, con 1-3 dígitos y opcionalmente hasta 2 decimales
            'height' => 'required|numeric|between:0.5,2.5|regex:/^\d{1,3}(\.\d{1,2})?$/',
            // Peso: debe permitir números enteros y opcionalmente dos decimales (con coma)
            'weight' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            // Porcentajes: entre 0 y 100, con hasta 2 dígitos (sin decimales permitidos)
            'body_fat_percentage' => 'required|numeric|between:0,100|regex:/^\d{1,2}$/',
            'muscle_mass_percentage' => 'required|numeric|between:0,100|regex:/^\d{1,2}$/',
            // Circunferencias: entre 0 y 200 cm, con un máximo de 3 dígitos enteros
            'waist_circumference' => 'required|numeric|between:0,200|regex:/^\d{1,3}$/',
            'hip_circumference' => 'required|numeric|between:0,200|regex:/^\d{1,3}$/',
            'chest_circumference' => 'required|numeric|between:0,200|regex:/^\d{1,3}$/',
            'gender' => 'required',
        ]);
        
        //Insertar en la BD
        BiometricData::create([
            'paciente_id' => $request->paciente_id,
            'height' => str_replace(',', '.', $request->height),
            'weight' => str_replace(',', '.', $request->weight),
            'body_fat_percentage' => $request->body_fat_percentage,
            'muscle_mass_percentage' => $request->muscle_mass_percentage,
            'waist_circumference' => $request->waist_circumference,
            'hip_circumference' => $request->hip_circumference,
            'chest_circumference' => $request->chest_circumference,
            'gender' => $request->gender,
        ]);
        
        //Redirecciona al menu
        return redirect()->route('menu')->with('success', 'Datos biometricos agregados exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BiometricData $biometricData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BiometricData $biometricData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BiometricData $biometricData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BiometricData $biometricData)
    {
        //
    }
}
