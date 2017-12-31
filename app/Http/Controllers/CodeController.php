<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\code;
class CodeController extends Controller
{
   public function index(Request $req)
   {
       $data=$req->all();
       
       $data=code::create($data);
    //   print_r($data);
      return redirect('/');
   }
}
