<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthApiController extends Controller
{
    public function api(Request $req){
        $user = Auth::user();
       return $user->toJson();
    }
}
