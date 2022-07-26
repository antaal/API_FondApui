<?php

namespace App\Http\Controllers;

use App\Models\Resultat;
use Illuminate\Http\Request;

class ResultatsController extends Controller
{
    //
    public function index()
    {
        return Resultat::all();
    }
    public function show($id)
    {
        return Resultat::findorfail($id);
    }
    public function store(Request $request)
    {
        $resultat = Resultat::create($request->all());
        return response()->json($resultat, 201);
    }
    public function update(Request $request, $id)
    {
        $resultat = Resultat::findorfail($id);
        $resultat->update($request->all());
        return response()->json($resultat, 200);
    }
    public function destroy($id)
    {
        Resultat::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
