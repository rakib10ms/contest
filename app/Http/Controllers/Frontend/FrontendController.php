<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Contest;
use App\Models\User;
use App\Models\ContestResult;
use App\Models\ContestWinner;
use Auth;
use DB;
use File;
use Carbon\Carbon;



class FrontendController extends Controller
{
    

    public function index(){

      $contests=DB::table('contests')->join('topics','contests.topic_id','=','topics.id')->select('contests.*','topics.name as topic_name')->where('contests.status','1')->orderBy('id','desc')->simplePaginate(6);



    return view('frontend.index',compact('contests'));
    }



      public function contestDescription($id){
          
      $contestDescription=Contest::where('id',$id)->first();
               
               $userId=Auth::id();
               $contestId=$id;
               // dd($contestId);
               $check=DB::table('contest_results')->where('contest_results.contest_id',$contestId)
               ->where('contest_results.user_id',  $userId);

              

    return view('frontend.contest_desc',compact('contestDescription','check'));
    }






 public function pastContest(){
      $pastContest = Contest::orderBy('end_date','DESC')->where('end_date', '<', Carbon::now())->get();
          return view('frontend.past-contest',compact('pastContest'));

    }


    public function contestForm($id){

      $contestId=DB::table('contests')->where('contests.id',$id)
                ->first();    

      // dd($contestId);


      $user=User::where('id',Auth::id())->first();
      return view('frontend.contest-form',compact('user','contestId'));
    }


    public function contestStore(Request $request){
     // dd($request->all());
         $request->validate([

            'file' => 'required|max:5000',
            ]);

       
        $contest_id=$request->input('contest_id');
        $topic_id=$request->input('topic_id');
        $user_id=Auth::id();
        
          $check = DB::table('contest_results')             
              ->where('contest_results.user_id', '=', $user_id)
              ->where('contest_results.contest_id', '=', $contest_id)
              ->where('contest_results.topic_id', '=', $topic_id)
              ->first();


          if($check){

            return redirect()->back()->with('status','You already Participated this contest');
        }

         
         else{

            $contest=New ContestResult();
      
        if($request->hasFile('file')){
            $file=$request->file('file');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/contest-result/'),$filename);
            $contest->file=$filename;


        $contest->contest_id=$request->input('contest_id');
        $contest->topic_id=$request->input('topic_id');

        $contest->user_id=Auth::id();
        $contest->notes=$request->input('notes');
       
        
        $contest->save();
         return redirect()->back()->with('status','You successfully participated this contest.
          You can');

        }        

         }
         }



 public function editForm(Request $request,$id){
     // dd($request->all());
         $request->validate([

            'file' => 'required|max:5000',
            ]);

       
        $contest_id=$request->input('contest_id');
        $topic_id=$request->input('topic_id');
        $user_id=Auth::id();
        
          $check = DB::table('contest_results')             
              ->where('contest_results.user_id', '=', $user_id)
              ->where('contest_results.contest_id', '=', $contest_id)
              ->where('contest_results.topic_id', '=', $topic_id)
              ->first();


          if($check){

            return redirect()->back()->with('status','You already Participated this contest');
        }

         
         else{

            $contest=New ContestResult();
      
        if($request->hasFile('file')){
            $file=$request->file('file');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/contest-result/'),$filename);
            $contest->file=$filename;


        $contest->contest_id=$request->input('contest_id');
        $contest->topic_id=$request->input('topic_id');

        $contest->user_id=Auth::id();
        $contest->notes=$request->input('notes');
       
        
        $contest->save();
         return redirect()->back()->with('status','You successfully participated this contest.
          You can');

        }        

         }
         }


    public function runningContest($id){
    
          $findContest=DB::table('contests')->join('topics','contests.topic_id','=','topics.id')->select('contests.*','topics.name as topic_name')->where('contests.status','1')->where('topic_id',$id)->orderBy('id','desc')->simplePaginate(9);
           

      return view('frontend.all-runningContest',compact('findContest'));
    }
  

  public function pastContestWinner($id){

         $pastContestWinner = ContestWinner::where('contest_id',$id)->first();
         // dd( $pastContestWinner);
         return view('frontend.pastcon-winnerDesc',compact('pastContestWinner'));

  }

       public function contestformEdit($id){
         $contestformEdit = ContestResult::where('contest_id',$id)->first();
         return view('frontend.profile.contestformEdit',compact('contestformEdit'));

       }

  
}

