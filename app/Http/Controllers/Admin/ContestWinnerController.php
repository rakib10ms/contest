<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContestResult;
use App\Models\ContestWinner;
use App\Models\Topic;
use DB;


class ContestWinnerController extends Controller
{
    public function contestSelection($id){


        $specific=DB::table('contest_results')
                      ->join('users','contest_results.user_id','=','users.id')
                      ->join('contests','contest_results.contest_id','=','contests.id')
                      ->select('contest_results.*','users.name as user_name','contests.name as contest_name','users.email')
                      ->where('contest_results.id',$id)
                       ->first();
 // dd($specific);
        return view('backend.contest-winner.create',compact('specific'));
    }
     public function contestSelectionUpdate(Request $request){




        $contest_id=$request->input('contest_id');
        $user_id=$request->input('user_id');
        // // dd($user_id);
        // dd($contest_id);

          $check=ContestWinner::where('user_id',$user_id)->where('contest_id',$contest_id)->exists();
          // dd($check);
         if($check){
      return redirect()->route('contest.result')->with('status','You already Added this user to this Winner Contest');
}
  else{
         $contestWinner=New ContestWinner();
          $contestWinner->contest_id=$request->input('contest_id');
          $contestWinner->winning_position=$request->input('winning_position');
          $contestWinner->winning_price=$request->input('winning_price');
          $contestWinner->user_id=$request->input('user_id');
          $contestWinner->message=$request->input('message');
          $contestWinner->save();
        return redirect()->route('all-winner')->with('status','Winner added successfully');


    }
}
    public function allWinner(){
        $all=DB::table('contest_winners')
                      ->join('users','contest_winners.user_id','=','users.id')
                      ->join('contests','contest_winners.contest_id','=','contests.id')
                      ->select('contest_winners.*','users.name as user_name','contests.name as contest_name','users.email')->get();
        return view('backend.contest-winner.index',compact('all'));
    }
}
