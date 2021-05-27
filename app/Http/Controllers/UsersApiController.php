<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class UsersApiController extends Controller
{
    public function api(Request $req){
      $users = new User();
      return $users->all()->toJson();
    }
    public function actions(){
      $act = DB::table('products')->where('user_id', Auth::user()->id)->get();
      return $act->toJson();
    }
}
