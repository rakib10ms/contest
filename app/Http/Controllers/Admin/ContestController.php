<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contest;
use App\Models\Topic;
use DB;
use File;


class ContestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
             $contests=DB::table('contests')->join('topics','contests.topic_id','=','topics.id')->select('contests.*','topics.name as topic_name')->orderBy('id','desc')->get();

         return view('backend.contest.index',compact('contests'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $topics=Topic::orderBy('id','asc')->get();

      return view('backend.contest.create',compact('topics'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
         $request->validate([

            'image' => 'required|max:4000',
            'name' => 'required|unique:contests',
            'topic_id' => 'required',
            'status' => 'required',
            'description' => 'required',
             'start_date' => 'required',
            'end_date' => 'required',    
            ]);


        $contest=new Contest();
      
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/contest/'),$filename);
            $contest->image=$filename;


        $contest->topic_id=$request->input('topic_id');
        $contest->name=$request->input('name');
        $contest->status=$request->input('status');
        $contest->description=$request->input('description');
        $contest->start_date=$request->input('start_date');
        $contest->end_date=$request->input('end_date');
       
        
        $contest->save();
        }
            return redirect()->route('contest.index')->with('status','Contest added successfully');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $editContest=Contest::find($id);
          $topics=Topic::all();

        return view ('backend.contest.edit',compact('editContest','topics'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $contest=Contest::find($id);
      
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalName();
            $filename=time().'.'.$ext;
            $file->move(public_path('assets/uploads/contest/'),$filename);
            $contest->image=$filename;


        $contest->topic_id=$request->input('topic_id');
        $contest->name=$request->input('name');
        $contest->status=$request->input('status');
        $contest->description=$request->input('description');
        $contest->start_date=$request->input('start_date');
        $contest->end_date=$request->input('end_date');
       
        
        $contest->save();
        return redirect()->route('contest.index')->with('status','Contest Updated successfully');

        }
            


        else{
         $contest->topic_id=$request->input('topic_id');
        $contest->name=$request->input('name');
        $contest->status=$request->input('status');
        $contest->description=$request->input('description');
        $contest->start_date=$request->input('start_date');
        $contest->end_date=$request->input('end_date');
       
        $contest->save();
        return redirect()->route('contest.index')->with('status','Contest Updated successfully');

    
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $deleteContest=Contest::find($id);
        $image='assets/uploads/contest/'.$deleteContest->image;
        if(File::exists($image)){
            File::delete($image);
        }

      
        $deleteContest->delete();

        return redirect()->route('contest.index');


      
    }
    
}
