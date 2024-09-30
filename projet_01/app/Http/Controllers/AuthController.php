<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;

class AuthController extends BaseController
{
    public function register(Request $request){
             $validator = Validator::make($request->all(),
                [
                    'name'=>'required',
                    'email'=>'required|email|unique:users,email', // Vérifie l'unicité de l'email,
                    'password'=>'required|min:6', // Ajoute une règle pour la longueur du mot de passe
                    'c_password'=>'required|same:password',
                ]
             );
             if($validator ->fails()){
                 return $this->sendError('validation error', $validator->errors()); 
             }
             
             $input=$request->all();
             $input['password']=bcrypt($input['password']);
             $user= User::create($input);

             $success['user']=$user;

             return $this->sendResponse($success,'User register successfully.');
    }

    public function login(){

    }

    public function logout(){

    }

    public function refresh(){

    }

    public function profile(){

    }

}
