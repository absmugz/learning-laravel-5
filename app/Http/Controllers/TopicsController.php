<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

use App\Http\Requests;

class TopicsController extends Controller
{
    //

    public function index (){

        /*get using normal queries
       $chapters = DB::table('chapters')->get();*/

        //get using eloquent
        $topics = Topic::all();
        return $topics;

    }
}
