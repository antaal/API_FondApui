<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    //
    public function index()
    {
        
        return Region::all();

    }

    public function show($id)
    {
        $Region = Region::findorfail($id);
        return response()->json($Region);
    }
    public function store(Request $request)
    {
        $Region = Region::create($request->all());
        return response()->json($Region, 201);
    }
    public function update(Request $request, $id)
    {
        $Region = Region::findorfail($id);
        $Region->update($request->all());
        return response()->json($Region, 200);
    }
    public function destroy($id)
    {
        Region::findorfail($id)->delete();
        return response()->json(null, 204);
    }
   
}
