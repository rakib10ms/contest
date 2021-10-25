<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use File;
use Image;

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
 
              session()->flash('success','password updated successfully');
              return redirect()->back()->with('success','password updated successfully');
            }
 
            else{
                   session()->flash('danger','new password can not be the old password!');

                  return redirect()->back()->with('danger','new password can not be the old password!');
                }
 
           }
 
          else{
             session()->flash('danger','Old Password doesnot matched!');

               return redirect()->back()->with('danger','Old Password doesnot matched!');
             }
 
       }

 
 public function updateProfile(Request $request,$id){
        $this->validate($request, [
 
        'name' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'district' => 'required',
        'image' => 'image',
        ]);

    $find=User::find($id);

    if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/user/'),$filename);
            $find->image=$filename;

    $find->name=$request->get('name');
    $find->phone=$request->get('phone');
    $find->address=$request->get('address');
    $find->district=$request->get('district');
    $find->save();
 }
 else{
 $find->name=$request->get('name');
    $find->phone=$request->get('phone');
    $find->address=$request->get('address');
    $find->district=$request->get('district');
    $find->save();


 }
 return redirect()->back()->with('status','Profile Updated successfully');

}
 
 public function profileView(){
    $myInfo=User::where('id',Auth::id())->first();
    return view('frontend.profile.userprofile-view',compact('myInfo'));

 }

    
}
