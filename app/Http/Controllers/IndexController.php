<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video ;
class IndexController extends Controller
{
   public function index()
   {
       $videos = Video::all()->take(5);
       return view('index', [
           'videos' => $videos
       ]);
          }
}
