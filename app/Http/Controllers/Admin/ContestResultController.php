<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContestResult;
use DB;

class ContestResultController extends Controller
{
    public function contestResult(){
        $contestResult=DB::table('contest_results')->join('users','users.id','=','contest_results.user_id')->join('contests','contests.id','=','contest_results.contest_id')->select('contest_results.*','users.name as user_name','contests.name as contest_name','users.email')->orderBy('id','desc')->get();
        return view('backend.contest-result.index',compact('contestResult'));
    }
}
