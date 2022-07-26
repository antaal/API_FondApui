<?php

namespace App\Http\Controllers;

use App\Models\Strategy;
use Illuminate\Http\Request;

class StrategiesController extends Controller
{
    //
    public function index()
    {
        return Strategy::all();
    }
    public function show($id)
    {
        return Strategy::findorfail($id);
    }
    public function store(Request $request)
    {
        $strategy = Strategy::create($request->all());
        return response()->json($strategy, 201);
    }
    public function update(Request $request, $id)
    {
        $strategy = Strategy::findorfail($id);
        $strategy->update($request->all());
        return response()->json($strategy, 200);
    }
    public function destroy($id)
    {
        Strategy::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
