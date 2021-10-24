<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class ProfileController extends Controller
{
    public function myContest(){
       return view('frontend.profile.my-contest');
    } 

    public function myProfile(){

        $user=User::where('id',Auth::id())->first();

       return view('frontend.profile.my-profile',compact('user'));
    }

    public function updatePassword(Request $request,$id){
               
               // dd($request->all());
         $this->validate($request, [
 
        'oldpassword' => 'required',
        'newpassword' => 'required',
        ]);
          $user=User::where('id',Auth::id())->first();

         $hashedPassword = Auth::user()->password;


       if (Hash::check($request->oldpassword , $hashedPassword )) {
 
         if (!Hash::check($request->newpassword , $hashedPassword)) {
 
              $users =User::find(Auth::user()->id);
              $users->password = bcrypt($request->newpassword);
              User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
 
              session()->flash('message','password updated successfully');
              return redirect()->back();
            }
 
            else{
                  session()->flash('message','new password can not be the old password!');
                  return redirect()->back();
                }
 
           }
 
          else{
               session()->flash('message','old password doesnt matched ');
               return redirect()->back();
             }
 
       }


 

    
}
