<?php

namespace App\Http\Controllers;

use App\Models\Statut;
use Illuminate\Http\Request;

class StatutController extends Controller
{
    //
    public function index()
    {
        return Statut::all();
    }
    public function show($id)
    {
        return Statut::findorfail($id);
    }
    public function store(Request $request)
    {
        $statut = Statut::create($request->all());
        return response()->json($statut, 201);
    }
    public function update(Request $request, $id)
    {
        $statut = Statut::findorfail($id);
        $statut->update($request->all());
        return response()->json($statut, 200);
    }
    public function destroy($id)
    {
        Statut::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
