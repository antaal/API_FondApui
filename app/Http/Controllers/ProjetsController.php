<?php

namespace App\Http\Controllers;

use App\Models\Projet;
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
        $projet = Projet::create($request->all());
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
