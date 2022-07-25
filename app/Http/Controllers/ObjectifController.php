<?php

namespace App\Http\Controllers;

use App\Models\Objectif;
use Illuminate\Http\Request;

class ObjectifController extends Controller
{
    //
    public function index()
    {
        return Objectif::all();
    }
}
