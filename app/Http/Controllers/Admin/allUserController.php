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
//         $from = 1;
//         $to = 100000;

//    $user=User::whereBetween('id', [$from, $to])->get();
// dd($user);

  }
   public function changeStatus($id)
    {
        $user = User::where('id',$id)->first();
        // dd($user);
        return view('backend.users.edit',compact('user'));
  
    }  

     public function updateStatus(Request $request,$id)
    {

        $findUser=User::find($id);

        $status = $request->input('status');
        $findUser->status= $status;

        $findUser->save();
        return redirect()->route('allUser')->with('status','status updated successfully');
  
    }

}
