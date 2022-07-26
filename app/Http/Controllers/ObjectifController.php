<?php

namespace App\Http\Controllers;

use App\Models\Objectif;
use Illuminate\Http\Request;

class ObjectifController extends Controller
{
    //
    public function index()
    {
        return Objectif::all();
    }
    public function show($id)
    {
        return Objectif::findorfail($id);
    }
    public function store(Request $request)
    {
        $objectif = Objectif::create($request->all());
        return response()->json($objectif, 201);
    }
    public function update(Request $request, $id)
    {
        $objectif = Objectif::findorfail($id);
        $objectif->update($request->all());
        return response()->json($objectif, 200);
    }
    public function destroy($id)
    {
        Objectif::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
