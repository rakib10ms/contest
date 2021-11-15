<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContestResult;
use App\Models\ContestWinner;

class DashboardController extends Controller
{
    public function index(){
        $users=User::all();
        $allUsers=count($users);   

         $contests=ContestResult::all();
        $allParticipates=count($contests);
         $winners=ContestWinner::all();

        $allWinners=count($winners);

    return view('backend.dashboard',compact('allUsers','allParticipates','allWinners'));

    }
}
