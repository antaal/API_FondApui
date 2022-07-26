<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;

class AssociationsController extends Controller
{
    //
    public function index()
    {
        return Association::all();
    }
    public function show($id)
    {
        return Association::findorfail($id);
    }
    public function store(Request $request)
    {
        $association = Association::create($request->all());
        return response()->json($association, 201);
    }
    public function update(Request $request, $id)
    {
        $association = Association::findorfail($id);
        $association->update($request->all());
        return response()->json($association, 200);
    }
    public function destroy($id)
    {
        Association::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
