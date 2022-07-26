<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    //
    public function index()
    {
        return Departement::all();
    }
    public function show($id)
    {
        return Departement::findorfail($id);
    }
    public function store(Request $request)
    {
        $departement = Departement::create($request->all());
        return response()->json($departement, 201);
    }
    public function update(Request $request, $id)
    {
        $departement = Departement::findorfail($id);
        $departement->update($request->all());
        return response()->json($departement, 200);
    }
    public function destroy($id)
    {
        Departement::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
