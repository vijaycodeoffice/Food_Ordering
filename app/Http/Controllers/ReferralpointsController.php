<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Referralpoints;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class ReferralpointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referralpoints = Referralpoints::latest()->get(); 
        return view('referralpoints.index', compact('referralpoints'));   
    }

    public function referraluser()
    {
        //$referraluser = Referralpoints::latest()->get(); 
        return view('referralpoints.referraluser');   
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('referralpoints.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $referralpoints_id = Referralpoints::insertGetId([
          
            'hotel_id' => $request->hotel_id,
            'refering_point' => $request->refering_point,
            'refered_point' => $request->refered_point,
         
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('referralpoints')->with('success','Referral Points Add ');
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
        $referralpoints = Referralpoints::findOrFail($id);
       
        return view('referralpoints.edit', compact('referralpoints'));
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
            'refering_point' => 'required',
          
        ]);
        $refered_id = $request->id;

        Referralpoints::findOrFail($refered_id)->update([
    
            'refering_point' => $request->refering_point,
            'refered_point' => $request->refered_point,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('referralpoints')->with('success','Points UpDate ');
    }


////////////Referralpoints active /////////////////

public function status_active($id){

    Referralpoints::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Referralpoints Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Referralpoints inactive /////////////////

    public function status_inactive($id){

        Referralpoints::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Referralpoints Inactive Successfully',
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
