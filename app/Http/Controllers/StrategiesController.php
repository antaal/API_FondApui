<?php

namespace App\Http\Controllers;

use App\Models\Strategy;
use Illuminate\Http\Request;

class StrategiesController extends Controller
{
    //
    public function index()
    {
        return Strategy::all();
    }
}
