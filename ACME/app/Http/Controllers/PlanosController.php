<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;

class PlanosController extends Controller
{
    public function getPlanos() {
        $data = Plano::all();
        return view("admin.planos")->with('planos', $data);
    }

    public function createPlano(Request $request) {
        $request->validate([
            "nombre_plano" => 'required|min:5',
            "descripcion" => 'required|min:5',
            "version" => 'required|min:1',
        ]);
        $plano = new Plano();
        $plano->proyecto_id = 1; // Asignar un proyecto_id fijo por ahora
        $plano->nombre_plano = $request->nombre_plano;
        $plano->descripcion = $request->descripcion;
        $plano->version = $request->version;
        $plano->save();
        return redirect()->back()->with('success', "Plano insertado correctamente");
    }
}