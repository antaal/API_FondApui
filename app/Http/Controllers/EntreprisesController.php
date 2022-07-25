<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntreprisesController extends Controller
{
    //
    public function index()
    {
        return Entreprise::all();
    }
}
