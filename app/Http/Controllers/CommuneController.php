<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    //
    public function index()
    {
        return Commune::all();
    }
    public function show($id)
    {
        return Commune::findorfail($id);
    }
    public function store(Request $request)
    {
        $commune = Commune::create($request->all());
        return response()->json($commune, 201);
    }
    public function update(Request $request, $id)
    {
        $commune = Commune::findorfail($id);
        $commune->update($request->all());
        return response()->json($commune, 200);
    }
    public function destroy($id)
    {
        Commune::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
