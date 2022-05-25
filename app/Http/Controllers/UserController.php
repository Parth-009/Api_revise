<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\UserPolicyExpiredJob;

class UserController extends Controller
{
    public function sendEmailUser(){
        $data = User::find(1);
        $array= json_decode(json_encode($data),true);
        //dd($array['email']);
        if(count($array)>0){
           UserPolicyExpiredJob::dispatch($array["email"])->delay(now()->addMinutes(10));
           return "Email is sent";
        }
        else{
            echo "We didn't get user email to ";
        }
    }
}
