<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class allUserController extends Controller
{
    public function index(){
        $allUsers=User::where('user_type','!=','1')->get();
        return view('backend.users.index',compact('allUsers'));

  }
   public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
