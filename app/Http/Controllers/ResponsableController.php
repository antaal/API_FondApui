<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    //
    public function index()
    {
        return Responsable::all();
    }
    public function show($id)
    {
        return Responsable::findorfail($id);
    }
    // public function store(Request $request)
    // {
       
    // }
    // public function update(Request $request, $id)
    // {
    //     $responsable = Responsable::findorfail($id);
    //     $responsable->update($request->all());
    //     return response()->json($responsable, 200);
    // }
    // public function destroy($id)
    // {
    //     Responsable::findorfail($id)->delete();
    //     return response()->json(null, 204);
    // }
}
