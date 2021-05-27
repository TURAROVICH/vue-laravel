<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function add(Request $req){
        $name = $req->input('name');
        $o = $req->input('o_price');
        $c = $req->input('c_price');
        $description = $req->input('description');
        $type = $req->input('type');
        $img = $req->file('avatar')->store('avatars','public');
        
        $product = new Products();
        $product->name = $name;
        $product->o_price = $o;
        $product->c_price = $c;
        $product->description = $description;
        $product->type = $type;
        $product->img = $img;
        $product->save();
    }
    public function delete(Request $req)
    {
        $delete = Products::find($req->input('id'))->delete();
        return $delete;
    }
     

    public function update(Request $req){
        $o = $req->input('o');
        $c = $req->input('c');
        $name = $req->input('name');
        $description = $req->input('description');
        $type = $req->input('type');

         $res = DB::table('products')
              ->where('id', $req->input('id'))
              ->update([
                  'o_price' => $o,
                  'c_price' => $c,
                  'name'    =>$name,
                  'description'=>$description,
                  'type'    =>$type
              ]);
        return $res;

    }
}
