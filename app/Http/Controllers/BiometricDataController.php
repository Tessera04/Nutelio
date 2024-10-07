<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Models\BiometricData;

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
        $pacientes = Paciente::all();

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
            'height' => 'required|numeric|between:0.5,2.5',
            'weight' => ['required', 'regex:/^\d+(,\d{1,2})?$/'],
            'body_fat_percentage' => 'required|numeric|between:0,100',
            'muscle_mass_percentage' => 'required|numeric|between:0,100',
            'waist_circumference' => 'required|numeric|between:0,200',
            'hip_circumference' => 'required|numeric|between:0,200',
            'chest_circumference' => 'required|numeric|between:0,200',
            'gender' => 'required|in:Masculino,Femenino',
        ]);
        
        //Insertar en la BD
        BiometricData::create([
            'paciente_id' => $request->paciente_id,
            'height' => str_replace(',', '.', $request->height),
            'weight' => str_replace(',', '.', $request->weight),
            'body_fat_percentage' => $request->bfp,
            'muscle_mass_percentage' => $request->mmp,
            'waist_circumference' => $request->waist_circ,
            'hip_circumference' => $request->hip_circ,
            'chest_circumference' => $request->chest_circ,
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
