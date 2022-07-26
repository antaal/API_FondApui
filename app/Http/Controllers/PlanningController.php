<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use Illuminate\Http\Request;

class PlanningController extends Controller
{
    //
    public function index()
    {
        return Planning::all();
    }
    public function show($id)
    {
        return Planning::findorfail($id);
    }
    public function store(Request $request)
    {
        $planning = Planning::create($request->all());
        return response()->json($planning, 201);
    }
    public function update(Request $request, $id)
    {
        $planning = Planning::findorfail($id);
        $planning->update($request->all());
        return response()->json($planning, 200);
    }
    public function destroy($id)
    {
        Planning::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
