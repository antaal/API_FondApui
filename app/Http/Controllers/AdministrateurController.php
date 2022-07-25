<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateur;
class AdministrateurController extends Controller
{
    //
    public function index()
    {
        return Administrateur::all();
    }
}
