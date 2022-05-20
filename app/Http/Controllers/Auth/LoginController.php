<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginController extends Controller
{
   public function userLogin(Request $request)
   {
        $validation = Validator::make($request->all(),[
            "email" =>"required",
            "password" => "required | max:8"
        ]);

        if($validation->fails()){
            return response()->json(['errors'=>$validation->errors()],401);
        }
        else{
            $user_data=array(
                'email' => $request->email,
                'password' => $request->password
            );

            if(Auth::attempt($user_data)){
                $user = Auth::user();
                $success['token'] =  $user->createToken('MyApp')-> accessToken; 
                return response()->json(['msg'=>'Login successfully'],200);
            }
            else{
                return response()->json(['error'=>'Unauthorised'], 401); 
            }
        }
   }
}
