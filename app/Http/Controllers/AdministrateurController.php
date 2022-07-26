<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateur;
class AdministrateurController extends Controller
{
    //
    public function index()
    {
        return Administrateur::all();
    }
    public function show($id)
    {
        return Administrateur::findorfail($id);
    }
    public function store(Request $request)
    {
        $administrateur = Administrateur::create($request->all());
        return response()->json($administrateur, 201);
    }
    public function update(Request $request, $id)
    {
        $administrateur = Administrateur::findorfail($id);
        $administrateur->update($request->all());
        return response()->json($administrateur, 200);
    }
    public function destroy($id)
    {
        Administrateur::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
