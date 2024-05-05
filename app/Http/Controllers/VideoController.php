<?php

namespace App\Http\Controllers;
use App\Models\video ;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index() {
        $videos = video::all();

        return$videos;


    }

    public function best(){
        echo "this method best is ok";
    }
}
