<?php

namespace App\Http\Controllers;

use App\Models\Statut_Projet;
use Illuminate\Http\Request;

class StatutProjetController extends Controller
{
    //
     public function index()
    {
        return Statut_Projet::all();
    }
    public function show($id)
    {
        return Statut_Projet::findorfail($id);
    }
    public function store(Request $request)
    {
        $statut = Statut_Projet::create($request->all());
        return response()->json($statut, 201);
    }
    public function update(Request $request, $id)
    {
        $statut = Statut_Projet::findorfail($id);
        $statut->update($request->all());
        return response()->json($statut, 200);
    }
    public function destroy($id)
    {
        Statut_Projet::findorfail($id)->delete();
        return response()->json(null, 204);
    }
    
}
