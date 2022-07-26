<?php

namespace App\Http\Controllers;

use App\Models\Secteur;
use Illuminate\Http\Request;

class SecteurController extends Controller
{
    //
    public function index()
    {
        return Secteur::all();
    }
    public function show($id)
    {
        return Secteur::findorfail($id);
    }
    public function store(Request $request)
    {
        $secteur = Secteur::create($request->all());
        return response()->json($secteur, 201);
    }
    public function update(Request $request, $id)
    {
        $secteur = Secteur::findorfail($id);
        $secteur->update($request->all());
        return response()->json($secteur, 200);
    }
    public function destroy($id)
    {
        Secteur::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
