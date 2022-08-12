<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use Illuminate\Http\Request;

class EtatController extends Controller
{
    //
    public function index()
    {
        return Etat::all();
    }
    public function show($id)
    {
        return Etat::findorfail($id);
    }
    public function store(Request $request)
    {
        $etat = Etat::create($request->all());
        return response()->json($etat, 201);
    }
    public function update(Request $request, $id)
    {
        $etat = Etat::findorfail($id);
        $etat->update($request->all());
        return response()->json($etat, 200);
    }
    public function destroy($id)
    {
        Etat::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
