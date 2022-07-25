<?php

namespace App\Http\Controllers;

use App\Models\Risque;
use Illuminate\Http\Request;

class RisquesController extends Controller
{
    //
    public function index()
    {
        return Risque::all();
    }
}
