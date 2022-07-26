<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActivitesController extends Controller
{
    //
    public function index()
    {
        
        return Activite::all();
    
    }
    public function show($id)
    {
        return Activite::findorfail($id);
    }
    public function store(Request $request)
    {
        $activite = Activite::create($request->all());
        return response()->json($activite, 201);
    }
    public function update(Request $request, $id)
    {
        $activite = Activite::findorfail($id);
        $activite->update($request->all());
        return response()->json($activite, 200);
    }
    public function destroy($id)
    {
        Activite::findorfail($id)->delete();
        return response()->json(null, 204);
    }
    
}
