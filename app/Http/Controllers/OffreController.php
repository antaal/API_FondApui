<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


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
    public function store(Request $request)
    {
        $request->validate([
            'titre'=>'required',
            'image'=>'required|image',
            'description'=>'required',
            
        ]);

        try{
            $imageName = Str::random().'.'.$request->image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('offres/image', $request->image,$imageName);
            Offre::create($request->post()+['image'=>$imageName]);

            return response()->json([
                'message'=>'offres Created Successfully!!'
            ]);
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Something goes wrong while creating a offres!!'
            ],500);
        }
    }

    public function update(Request $request, Offre $offre)
    {
        // $offre = Offre::findorfail($id);
        // $offre->update($request->all());
        // return response()->json($offre, 200);
        /////////////////////////////
        $request->validate([
            'title'=>'required',
            'image'=>'nullable',
            'description'=>'required'
            
        ]);

        try{

            $offre->fill($request->post())->update();

            if($request->hasFile('image')){

                // remove old image
                if($offre->image){
                    $exists = Storage::disk('public')->exists("offres/image/{$offre->image}");
                    if($exists){
                        Storage::disk('public')->delete("offres/image/{$offre->image}");
                    }
                }

                $imageName = Str::random().'.'.$request->image->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('offres/image', $request->image,$imageName);
                $offre->image = $imageName;
                $offre->save();
            }

            return response()->json([
                'message'=>'offres Updated Successfully!!'
            ]);

        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Something goes wrong while updating a offres!!'
            ],500);
        }
    }

    public function destroy(Offre $offre)
    {
        // Offre::findorfail($id)->delete();
        // return response()->json(null, 204);
        ///////////////
        
        try {

            if($offre->image){
                $exists = Storage::disk('public')->exists("offres/image/{$offre->image}");
                if($exists){
                    Storage::disk('public')->delete("offres/image/{$offre->image}");
                }
            }

            $offre->delete();

            return response()->json([
                'message'=>'offres Deleted Successfully!!'
            ]);
            
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Something goes wrong while deleting a offres!!'
            ]);
        }
    }
}
    
