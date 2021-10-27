<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContestResult;
use App\Models\ContestWinner;
use DB;

class ContestResultController extends Controller
{
    public function contestResult(){
        $contestResult=DB::table('contest_results')->join('users','users.id','=','contest_results.user_id')->join('contests','contests.id','=','contest_results.contest_id')->select('contest_results.*','users.name as user_name','contests.name as contest_name','users.email')->orderBy('id','desc')->get();
        return view('backend.contest-result.index',compact('contestResult'));
    }

     public function contestResultEdit($id){
                $specific=DB::table('contest_winners')->join('users','users.id','=','contest_winners.user_id')->join('contests','contests.id','=','contest_winners.contest_id')->select('contest_winners.*','users.name as user_name','contests.name as contest_name','users.email')->where('contest_id',$id)->first();

                return view('backend.contest-winner.edit',compact('specific'));

     }
}
