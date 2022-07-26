<?php

namespace App\Http\Controllers;

use App\Models\Risque;
use Illuminate\Http\Request;

class RisquesController extends Controller
{
    //
    public function index()
    {
        return Risque::all();
    }
    public function show($id)
    {
        return Risque::findorfail($id);
    }
    public function store(Request $request)
    {
        $risque = Risque::create($request->all());
        return response()->json($risque, 201);
    }
    public function update(Request $request, $id)
    {
        $risque = Risque::findorfail($id);
        $risque->update($request->all());
        return response()->json($risque, 200);
    }
    public function destroy($id)
    {
        Risque::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
