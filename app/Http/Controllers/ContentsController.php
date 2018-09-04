<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    //

    public function index(){
        $data['version'] = "0.0.1";
        
        return view('contents/home',$data);
    }
}
