<?php

namespace App\Http\Controllers;

use App\Models\Offre;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OffreController extends Controller
{
    //
    public function index()
    {
        return Offre::all();
    }
    public function create(Request $request)
    {
        $offre = Offre::create($request->all());
        return response()->json($offre);
    }
    public function show($id)
    {
        $message = "merci anta, mais l'offre n'existe pas";
        $status = 404;
        $offre = Offre::where('id_offre', $id)->get()->first();
        if ($offre!=null) {
            $message = $offre;
            $status = 200;
        }
        return response()->json($message, $status);
    }
}
