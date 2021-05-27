<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\DB;
class ApiProductsController extends Controller
{
    public function all(){
     $data= DB::table('products')->get();

     return response()->json($data);
    }

    public function one(Request $req){
        $product = DB::table('products')->find($req->input('id'));

        return response()->json($product);
    }
}
