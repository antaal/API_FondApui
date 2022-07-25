<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    //
    public function index()
    {
        return Offre::all();
    }
}
