<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Contest;
use DB;


class FrontendController extends Controller
{
    

    public function index(){

      $contests=DB::table('contests')->join('topics','contests.topic_id','=','topics.id')->select('contests.*','topics.name as topic_name')->where('contests.status','1')->orderBy('id','desc')->limit(3)->get();


    return view('frontend.index',compact('contests'));
    }

  
}
