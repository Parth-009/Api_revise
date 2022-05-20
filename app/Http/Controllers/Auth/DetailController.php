<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DetailController extends Controller
{
    public function userDetails() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user]); 
    } 
}
