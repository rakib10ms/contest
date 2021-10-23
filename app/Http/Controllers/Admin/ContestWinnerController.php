<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContestResult;



class ContestWinnerController extends Controller
{
    public function contestSelection($id){

        $participantId=ContestResult::where('id',$id)->first();
        return view('backend.contest-winner.create',compact('participantId'));
    }
}
