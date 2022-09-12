<?php

namespace App\Http\Controllers;

use App\Models\Offre;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Http\JsonResponse;

class OffreController extends Controller
{
    //
    public function index()
    {
        return Offre::all();
    }
   
    public function show($id)
    {
        $offre = Offre::findorfail($id);
        return response()->json($offre);
    }
    // public function store(Request $request)
    // {
    //     // $offre = Offre::create($request->all());
    //     // return response()->json($offre, 201);
       
    //      $offre = new Offre();


    //     $offre->titre=$request->titre;
    //     $offre->description=$request->description;
    //     if ($request->images!="") {
    //         $strpos = strpos($request->images, ';');
    //         $sub = substr($request->images, 0, $strpos);
    //         $ex = explode('/',$sub)[1];
    //         $name = time().".".$ex;
    //         $img = Image::make($request->images)->resize(117,100);
    //         $upload_path = public_path()."/uploads/";
    //         $img->save($upload_path.$name);
    //         $offre->images =$name;
    //     }else{
    //         $offre->images ="images.png";
    //     }
    //     $offre->images =$name;
    //     $offre->date_Lancement = $request->date_Lancement;
    //     $offre->fin_Depot = $request->fin_Depot;
    //     $offre->save();
    //      return response()->json($offre, 201);

    //     //////////Khoya//////////////////////////
    //     // $offre = new Offre();
    //     // if ($request->hasFile('images')) {
    //     //     $file = $request->file('images');
    //     //     $extension = $file->getClientOriginalExtension();
    //     //     $filename = time().'.'.$extension;
    //     //     $file->move('uploads/',$filename);
    //     //     $request->photo = 'uploads/'.$filename;

    //     //     $offre = Offre::create($request->all());
    //     //     return response()->json($offre, 201);
    //     //  }
    // }

    public function store(Request $request, Offre $offre) 
    {
        $titre=$request->titre;
        $images=$request->images;
        $description=$request->description;
        $date_Lancement=$request->date_Lancement;
        $fin_Depot=$request->fin_Depot;

        if(!empty($titre) && !empty($images)) {
            $offre ->titre=$titre;
            $offre->images=$images;
            $offre->description=$description;
            $offre->date_Lancement=$date_Lancement;
            $offre->fin_Depot=$fin_Depot;
            $offre->save();

            return response()->json([
                'offre' => $offre,
                'status' => '200',
                'msg'=>'offre Ajoute'
            ]);


        }else{
            return response()->json(
                [
                    'msg' =>'on remplit',
                    'status' =>400
                ]
                );
        
    }

        
    }
    public function update(Request $request, $id)
    {
        $offre = Offre::findorfail($id);
        $offre->update($request->all());
        return response()->json($offre, 200);
    }
    public function destroy($id)
    {
        Offre::findorfail($id)->delete();
        return response()->json(null, 204);
    }
    
}
