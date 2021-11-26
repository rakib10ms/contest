<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContestNotice;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ContestNotification;
use Notification;
use DB;


class ContestNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $allConNotice=ContestNotice::orderBy('id','desc')->get();
        return view('backend.contest-notice.index',compact('allConNotice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contest-notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $users=User::all();
         $conNotice=New ContestNotice();
         $conNotice->description=$request->description;
         $conNotice->save();

        Notification::send($users,new ContestNotification($request->description));
        return redirect()->route('contest-notice')->with('status','ContestNotifciation added to all users');


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

        $findId=ContestNotice::find($id);
        return view('backend.contest-notice.edit',compact('findId'));
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
        $update=ContestNotice::find($id);
         $update->description=$request->description;
         $update->update();

    return redirect()->route('contest-notice')->with('status','ContestNotifciation updated to all users');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $delete=ContestNotice::find($id);
      $delete->delete();
    return redirect()->route('contest-notice')->with('status','ContestNotifciation Deleted successfully');

    }
}
