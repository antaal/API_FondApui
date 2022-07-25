<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActivitesController extends Controller
{
    //
    public function index()
    {
        
        return Activite::all();
    
    }
}
