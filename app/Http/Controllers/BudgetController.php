<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    //
    public function index()
    {
        return Budget::all();
    }
    public function show($id)
    {
        return Budget::findorfail($id);
    }
    public function store(Request $request)
    {
        $budget = Budget::create($request->all());
        return response()->json($budget, 201);
    }
    public function update(Request $request, $id)
    {
        $budget = Budget::findorfail($id);
        $budget->update($request->all());
        return response()->json($budget, 200);
    }
    public function destroy($id)
    {
        Budget::findorfail($id)->delete();
        return response()->json(null, 204);
    } 
    
}
