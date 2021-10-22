<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Contest;
use DB;
use Carbon\Carbon;



class FrontendController extends Controller
{
    

    public function index(){

      $contests=DB::table('contests')->join('topics','contests.topic_id','=','topics.id')->select('contests.*','topics.name as topic_name')->where('contests.status','1')->orderBy('id','desc')->limit(6)->get();


    return view('frontend.index',compact('contests'));
    }

      public function contestDescription($id){
          
      $contestDescription=Contest::where('id',$id)->first();


    return view('frontend.contest_desc',compact('contestDescription'));
    }


    public function contestForm(){
      return "hello";
    }

 public function pastContest(){
      $pastContest = Contest::orderBy('end_date','DESC')->where('end_date', '<', Carbon::now())->get();
          return view('frontend.past-contest',compact('pastContest'));

    }

  
}
