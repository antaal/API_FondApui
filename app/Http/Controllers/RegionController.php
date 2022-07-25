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

    public function show($id_region)
    {
        $Region = Region::find($id_region);
        return response()->json($Region);
    }
   
}
