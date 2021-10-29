<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use File;
use Image;
use Validator;
use DB;
use Carbon\Carbon;


class ProfileController extends Controller
{
    public function myContest(){

        $runningAttendent=DB::table('contest_results')->join('contests','contest_results.contest_id','=','contests.id')
->where('user_id',Auth::id())->where('contests.end_date','>=',Carbon::now())->get();



    $userConresult=DB::table('contest_winners')->join('users','users.id','=','contest_winners.user_id')
    ->join('contests','contests.id','=','contest_winners.contest_id')
    ->select('users.*','contests.name as contest_name','contests.code as contest_code','contest_winners.*')
    ->where('contest_winners.user_id',Auth::id())->get();

// dd($userConresult);




        $prevAttendContest=DB::table('contest_results')->join('contests','contest_results.contest_id','=','contests.id')
->where('user_id',Auth::id())->where('contests.end_date','<=',Carbon::now())->get();


       return view('frontend.profile.my-contest',compact('runningAttendent','userConresult',
        'prevAttendContest'));
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
    // dd($request->all());

        $this->validate($request, [
 
        'name' => 'required',
        'phone' => ['required', 'max:14'],
        'address' => 'required',
        'district' => 'required',

        ]);

    $find=User::find($id);

    if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/users/'),$filename);
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
