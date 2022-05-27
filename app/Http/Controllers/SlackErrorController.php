<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SlackErrorController extends Controller
{
    public function codeErrorSlack(){
        return "hello";
    }

    public function slackError(){
        return "Hii"
    }
}
