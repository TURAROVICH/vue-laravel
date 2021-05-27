<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Products extends Model
{
    public function __construct()
    {
      $this->user_id = Auth::user()->id;
    }
}
