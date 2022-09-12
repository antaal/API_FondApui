<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $validations= Validator::make($request->all(),[
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'email'=>'required|email|unique:users|max:155',
            'password'=>'required|string|min:6|',

        ]);
        //check error
        if($validations->fails()){
            $error = $validations->errors();
            return response()->json([
                'errors' => $error,
                'status'=>401
            ]);
        }
        //check if validations is successs
   

   
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'token' => $token,
                'type' => 'Bearer'
            ]);
        
    }

        public function login(Request $request){
            if(!Auth::attempt($request->only(['email','password']))){
                return response()->json([
                    'message' => 'Information de Connexion non reconnus',
                    'status'=>401
                ]);
            }
            $user = User::where('email,$request->email')->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'token' => $token,
                'type' => 'Bearer'
            ])->cookie('jwt',$token);


            
        }

    public function user(Request $request){
        return $request->user();
    }

}