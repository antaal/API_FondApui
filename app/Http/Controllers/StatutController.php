<?php

namespace App\Http\Controllers;

use App\Models\Statut;
use Illuminate\Http\Request;

class StatutController extends Controller
{
    //
    public function index()
    {
        return Statut::all();
    }
}
