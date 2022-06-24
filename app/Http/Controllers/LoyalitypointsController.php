<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Loyalitypoints;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class LoyalitypointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loyalitypoints = Loyalitypoints::latest()->get(); 
        return view('loyalitypoints.index', compact('loyalitypoints'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('loyalitypoints.create');    
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
            'earning_point' => 'required',
          
        ]);

    
        $loyalitypoints_id = Loyalitypoints::insertGetId([
          
     
            'hotel_id' => $request->hotel_id,
            'earning_point' => $request->earning_point,
            'earning_point_value' => $request->earning_point_value,
            'redeeming_point' => $request->redeeming_point,
            'redeeming_point_value' => $request->redeeming_point_value,
            'reward_point_for_registration' => $request->reward_point_for_registration,
            'reward_point_for_review' => $request->reward_point_for_review,
            'reward_point_for_fristorder' => $request->reward_point_for_fristorder,
            'reward_point_for_sharingapp' => $request->reward_point_for_sharingapp,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('loyalitypoints')->with('success','Loyality Points Add ');
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
        $loyalitypoints = Loyalitypoints::findOrFail($id);
       
        return view('loyalitypoints.edit', compact('loyalitypoints'));   
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
            'earning_point' => 'required',
          
        ]);
        $loyalitypoints_id = $request->id;

        Loyalitypoints::findOrFail($loyalitypoints_id)->update([
    
            'earning_point' => $request->earning_point,
            'earning_point_value' => $request->earning_point_value,
            'redeeming_point' => $request->redeeming_point,
            'redeeming_point_value' => $request->redeeming_point_value,
            'reward_point_for_registration' => $request->reward_point_for_registration,
            'reward_point_for_review' => $request->reward_point_for_review,
            'reward_point_for_fristorder' => $request->reward_point_for_fristorder,
            'reward_point_for_sharingapp' => $request->reward_point_for_sharingapp,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('loyalitypoints')->with('success','Loyalitypoints UpDate ');
    }


 ////////////Loyalitypoints active /////////////////

 public function status_active($id){

    Loyalitypoints::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Loyalitypoints Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Loyalitypoints inactive /////////////////

    public function status_inactive($id){

        Loyalitypoints::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Loyalitypoints Inactive Successfully',
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
