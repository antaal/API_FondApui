<?php

namespace App\Http\Controllers;

use App\Models\Resultat;
use Illuminate\Http\Request;

class ResultatsController extends Controller
{
    //
    public function index()
    {
        return Resultat::all();
    }
}
