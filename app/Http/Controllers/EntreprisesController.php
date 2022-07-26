<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntreprisesController extends Controller
{
    //
    public function index()
    {
        return Entreprise::all();
    }
    public function show($id)
    {
        return Entreprise::findorfail($id);
    }
    public function store(Request $request)
    {
        $entreprise = Entreprise::create($request->all());
        return response()->json($entreprise, 201);
    }
    public function update(Request $request, $id)
    {
        $entreprise = Entreprise::findorfail($id);
        $entreprise->update($request->all());
        return response()->json($entreprise, 200);
    }
    public function destroy($id)
    {
        Entreprise::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
