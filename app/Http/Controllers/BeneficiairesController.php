<?php

namespace App\Http\Controllers;

use App\Models\Beneficiaire;
use Illuminate\Http\Request;

class BeneficiairesController extends Controller
{
    //
    public function index()
    {
        return Beneficiaire::all();
    }
    public function show($id)
    {
        return Beneficiaire::findorfail($id);
    }
    public function store(Request $request)
    {
        $beneficiaire = Beneficiaire::create($request->all());
        return response()->json($beneficiaire, 201);
    }
    public function update(Request $request, $id)
    {
        $beneficiaire = Beneficiaire::findorfail($id);
        $beneficiaire->update($request->all());
        return response()->json($beneficiaire, 200);
    }
    public function destroy($id)
    {
        Beneficiaire::findorfail($id)->delete();
        return response()->json(null, 204);
    }
}
