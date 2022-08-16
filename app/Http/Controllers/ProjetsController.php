<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Budget;
use App\Models\Etat;
use App\Models\Objectif;
use App\Models\Projet;
use App\Models\Responsable;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    //
    public function index()
    {
        return Projet::all();
    }
    public function show($id)
    {
        return Projet::findorfail($id);
    }
    public function store(Request $request)
    {
        $inputs = $request->all();

        $responsable = Responsable::create($request->all());
        $etat = Etat::create($request->all());

        $inputs['responsable_id'] = $responsable->id;
        $inputs['etat_id'] = $etat->id;
        $projet = Projet::create($inputs);
        return response()->json($projet, 201);
    }
    public function update(Request $request, $id)
    {
        $projet = Projet::findorfail($id);
        $projet->update($request->all());
        return response()->json($projet, 200);
    }
    public function destroy($id)
    {
        Projet::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
