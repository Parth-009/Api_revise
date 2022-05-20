<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    public function userRegister(Request $request)
        {
           $validator = Validator::make($request->all(),[
               "name" => "required | string",
               "email" => "required | unique:users",
               "password" => "required | max:8"
           ]);
           
           if($validator->fails()){
               return response()->json(['errors'=>$validator->errors()],401);
           }
           else{
                $input = $request->all(); 
                $input['password'] = bcrypt($input['password']); 
                $user = User::create($input); 
                $success['token'] =  $user->createToken('MyApp')-> accessToken; 
                dd($success['token']);
                $success['name'] =  $user->name;

                return response()->json(['success'=>$success['token']]);
           }
        }
}
