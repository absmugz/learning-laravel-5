<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class ChaptersController extends Controller
{
    //
    public function index (){


        $chapters = DB::table('chapters')->get();
        return view('chapters.index',compact('chapters'));

    }

}
