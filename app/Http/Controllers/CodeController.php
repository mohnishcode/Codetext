<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\code;
use App\Http\Controllers\DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class CodeController extends Controller
{
    public function index(Request $req)
    {
        $data=$req->all();

        $data=code::create($data);

        return redirect('/');
    }

    public function download( $id)
    {
        //$id=$req->all();

        $data =  code::where('id','=',$id)->first();

        echo $data->title;
        echo $data->editor;
        Storage::disk('local')->put('file.html', $data);
        
    }
}
