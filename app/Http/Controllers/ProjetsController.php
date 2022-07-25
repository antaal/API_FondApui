<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    //
    public function index()
    {
        
        return Projet::all();
    
    }

    public function show($id)
    {
        return Projet::find($id);
    }
}
