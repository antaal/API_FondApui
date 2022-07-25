<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;

class AssociationsController extends Controller
{
    //
    public function index()
    {
        return Association::all();
    }
}
