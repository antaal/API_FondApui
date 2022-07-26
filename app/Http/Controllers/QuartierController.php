<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use Illuminate\Http\Request;

class QuartierController extends Controller
{
    //
    public function index()
    {
        return Quartier::all();
    }
    public function show($id)
    {
        return Quartier::findorfail($id);
    }
    public function store(Request $request)
    {
        $quartier = Quartier::create($request->all());
        return response()->json($quartier, 201);
    }
    public function update(Request $request, $id)
    {
        $quartier = Quartier::findorfail($id);
        $quartier->update($request->all());
        return response()->json($quartier, 200);
    }
    public function destroy($id)
    {
        Quartier::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
