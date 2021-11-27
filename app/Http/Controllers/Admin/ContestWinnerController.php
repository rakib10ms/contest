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
                 $contestId=$specific->contest_id;  

                 $userId=$specific->user_id;      


      $check=DB::table('contest_winners')
                      ->join('users','contest_winners.user_id','=','users.id')
                      ->join('contests','contest_winners.contest_id','=','contests.id')
                      ->select('contest_winners.*','users.name as user_name','contests.name as contest_name','users.email')
                      ->where('contest_winners.user_id',$userId)->where('contest_winners.contest_id',$contestId)->first();


      if($check){
        return view('backend.contest-winner.edit',compact('check'));

      }
      else{
       $check=DB::table('contest_results')
                      ->join('users','contest_results.user_id','=','users.id')
                      ->join('contests','contest_results.contest_id','=','contests.id')
                      ->select('contest_results.*','users.name as user_name','contests.name as contest_name','users.email')
                      ->where('contest_results.id',$id)
                       ->first();

       return view('backend.contest-winner.create',compact('check'));
      }

    }




     public function contestSelectionUpdate(Request $request,$id){  
 


        $updateData=ContestWinner::where('id',$id)->first();
        $contest_id=$request->input('contest_id');
        $user_id=$request->input('user_id');
        $winning_price=$request->input('winning_price');
        $winning_position=$request->input('winning_position');
        $message=$request->input('message');

        $updateData->user_id=$user_id;
        $updateData->winning_price=$winning_price;
        $updateData->winning_position=  $winning_position;
        $updateData->contest_id=$contest_id;
        $updateData->message= $message;
        
        $updateData->update();
        return redirect()->route('all-winner')->with('status','Winner updated successfully');

    }






    public function allWinner(){
        $all=DB::table('contest_winners')
                      ->join('users','contest_winners.user_id','=','users.id')
                      ->join('contests','contest_winners.contest_id','=','contests.id')
                      ->select('contest_winners.*','users.name as user_name','contests.name as contest_name','users.email')->get();
        return view('backend.contest-winner.index',compact('all'));
    }


    public function contestSelectionStore(Request $request){

          $contestWinner=New ContestWinner();
          $contestWinner->contest_id=$request->input('contest_id');
          $contestWinner->winning_position=$request->input('winning_position');
          $contestWinner->winning_price=$request->input('winning_price');
          $contestWinner->user_id=$request->input('user_id');
          $contestWinner->message=$request->input('message');
          $contestWinner->save();
        return redirect()->route('all-winner')->with('status','Winner added successfully');




          
    }

    public function destroy($id){
      $delete=ContestWinner::find($id);
      $delete->delete();
        return redirect()->route('all-winner')->with('status','Winner deleted successfully');

    }




}





