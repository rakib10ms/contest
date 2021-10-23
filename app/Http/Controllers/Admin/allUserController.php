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
   public function changeStatus($id)
    {
        $user = User::where('id',$id)->first();
        // dd($user);
        return view('backend.users.edit',compact('user'));
  
    }  

     public function updateStatus(Request $request)
    {
        $status = $request->input('status');

        $update=new User();

        $update->status=$status;
        $update->save();
        return redirect()->route('allUser')->with('status','status updated successfully');
  
    }
}
