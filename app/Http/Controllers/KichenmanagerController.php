<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kichenmanager;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class KichenmanagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kichenmanagers = Kichenmanager::latest()->get();
        return view('kichenmanagers.index', compact('kichenmanagers'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get(); 
        return view('kichenmanagers.create', compact('langauges'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
          
        ]);

    
        $kichenmanager_id = Kichenmanager::insertGetId([
          
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('kichenmanagers')->with('success','Kichenmanager add ');
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
        $langauges = Langauges::latest()->get(); 
        $kichenmanagers = Kichenmanager::findOrFail($id);
        return view('kichenmanagers.edit', compact('kichenmanagers','langauges'));
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
        $request->validate([
            'name' => 'required',
          
        ]);
        $kichenmanagers_id = $request->id;

        Kichenmanager::findOrFail($kichenmanagers_id)->update([
    
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('kichenmanagers')->with('success','Kichen Manager Update');
    }


////////////Kichenmanager active /////////////////

public function status_active($id){

    Kichenmanager::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Kichenmanager Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Kichenmanager inactive /////////////////

    public function status_inactive($id){

        Kichenmanager::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Kichenmanager Inactive Successfully',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);


        }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
