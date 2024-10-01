<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    public function index(){
        $pacientes = Paciente::with('provincia')
                            ->where('user_id', Auth::id())
                            ->get();

        return view('paciente.tabla-paciente', compact('pacientes'));
    }

    public function create()
    {
        $provincias = Provincia::all();

        return view('paciente.paciente', ['provincias' => $provincias]);
    }

    public function store(Request $request){
        //dd($request);

        //Validar campos
        $request->validate([
            'name' => 'required|max:30',
            'surname' => 'required|max:30',
            'email' => 'required|email',
            'phone' => 'required|max:15',
            'province' => 'required|max:30',
            'location' => 'required|max:50',
            'address' => 'required|max:70',
            'dni' => 'required|max:10'
        ]);

        //Insertar en la BD
        Paciente::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'province' => $request->province,
            'location' => $request->location,
            'address' => $request->address,
            'dni' => $request->dni,
            'user_id' => Auth::id(),
        ]);

        //Redirecciona al menu
        return redirect()->route('menu')->with('success', 'Paciente creado exitosamente.');
    }

    public function show(Paciente $paciente){
        return view('paciente.perfil-paciente', [
            'paciente' => $paciente
        ]);
    }

    public function destroy(Paciente $paciente){
        $paciente->delete();

        return redirect()->route('tabla-paciente')->with('success', 'Paciente eliminado correctamente');
    }
}
