<?php

namespace App\Http\Controllers;

use App\Models\Beneficiaire;
use Illuminate\Http\Request;

class BeneficiairesController extends Controller
{
    //
    public function index()
    {
        return Beneficiaire::all();
    }
}
