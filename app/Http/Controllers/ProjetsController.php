<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use App\Models\Responsable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjetsController extends Controller
{
    //
    public function index()
    {
        return 
        $projets=Projet::all();
        response()->json([
            'status' => 'success',
            'projets' =>$projets
            // 'data' =>Responsable::with('responsable')->get()
        ], 200);
    }
    public function show($id)
    {
        return Projet::findorfail($id);
    }

    public function store(Request $request)
    {
    //    return $request->user();


    $data = $request->all();
    $responsable=Responsable::create($request->all());
    $data['responsables_id']=$responsable->id;
     $projet= Projet::create($data);        
     return response()->json($projet, 201);
    }

    public function update(Request $request, $id)
    {
        $projet = Projet::findorfail($id);
        $projet->update($request->all());
        return response()->json($projet, 200);
    }
    public function destroy($id)
    {
        Projet::findorfail($id)->delete();
        return response()->json(null, 204);
    }

     // public function uploadFile(File $file)
    // {
    //     $fileName = date('YmdHi') . $file->getClientOriginalName();
    //     $file->move(public_path('uploads'), $fileName);
    //     return public_path('uploads/' . $fileName);
    // }
    // public function upload(Request $request) {
    //     $imagesName = [];
    //     $response = [];

    //     $validator = Validator::make($request->all(),
    //         [
    //             'images' => 'required',
    //             'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    //         ]
    //     );

    //     if($validator->fails()) {
    //         return response()->json(["status" => "failed", "message" => "Validation error", "errors" => $validator->errors()]);
    //     }

    //     if($request->has('images')) {
    //         foreach($request->file('images') as $image) {
    //             $filename = Str::random(32).".".$image->getClientOriginalExtension();
    //             $image->move('uploads/', $filename);

    //             Image::create([
    //                 'image_name' => $filename
    //             ]);
    //         }

    //         $response["status"] = "successs";
    //         $response["message"] = "Success! image(s) uploaded";
    //     }

    //     else {
    //         $response["status"] = "failed";
    //         $response["message"] = "Failed! image(s) not uploaded";
    //     }
    //     return response()->json($response);
    // }

       // Storage::disk('local')->put('CNIRecto', $request->CNI_Recto);

        // die();
        ////get file from local storage
//        $file = Storage::disk('local')->get('CNIRecto');
// //check file in storage if exist
//        if(Storage::disk('local')->exists('CNIRecto')){

//            //delete file from storage_path('CNIRecto')
//            Storage::disk('local')->delete('CNIRecto');
//     }
// // die();

 // $CNI_recto = $this->uploadFile($request->file('CNI_recto'));
        // $CNI_verso = $this->uploadFile($request->file('CNI_verso'));
        // $NINEA_Recepisse = $this->uploadFile($request->file('NINEA_Recepisse'));

        // $request->CNI_recto = $CNI_recto;
        // $request->CNI_verso = $CNI_verso;
        // $request->NINEA_Recepisse = $NINEA_Recepisse;
}
