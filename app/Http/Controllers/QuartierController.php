<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use Illuminate\Http\Request;

class QuartierController extends Controller
{
    //
    public function index()
    {
        return Quartier::all();
    }
}
