<?php

namespace App\Http\Controllers;

use DB;
use App\Chapter;
use Illuminate\Http\Request;

use App\Http\Requests;


class ChaptersController extends Controller
{
    //
    public function index (){

         /*get using normal queries
        $chapters = DB::table('chapters')->get();*/

        //get using eloquent
        $chapters = Chapter::all();
        return view('chapters.index',compact('chapters'));

    }

/* Old way of getting instance of an object
    public function show($chapter_id){
        //$chapter = $chapter_id;
        //$chapter = Chapter::find($chapter_id);
        $chapter = Chapter::find($chapter_id);
        //return $chapter;
        return view('chapters.show',compact('chapter'));
    }
*/

    //New way of getting instance of an object using typehinting
    public function show(Chapter $chapter){
        //$chapter = $chapter_id;
        //$chapter = Chapter::find($chapter_id);
        //$chapter = Chapter::find($chapter_id);
        //return $chapter;
       return view('chapters.show',compact('chapter'));
    }


}
