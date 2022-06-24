<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurantmanager;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class RestaurantmanagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantmanagers = Restaurantmanager::latest()->get();  
        return view('restaurantmanagers.index', compact('restaurantmanagers'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get(); 
        return view('restaurantmanagers.create', compact('langauges'));   
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

    
        $restaurantmanagers_id = Restaurantmanager::insertGetId([
          
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('restaurantmanagers')->with('success','Restaurant Managers add ');
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
        $restaurantmanagers = Restaurantmanager::findOrFail($id);
        return view('restaurantmanagers.edit', compact('restaurantmanagers','langauges'));
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
        $restaurantmanagers_id = $request->id;

        Restaurantmanager::findOrFail($restaurantmanagers_id)->update([
    
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('restaurantmanagers')->with('success','Restaurant Manager Update');
    }


    ////////////Restaurantmanager active /////////////////

    public function status_active($id){

        Restaurantmanager::findOrFail($id)->update(['status' => 1]);
    
        $notification = array(
            'message' => 'Restaurantmanager Active Successfully',
            'alert-type' => 'success'
        );
    
    return redirect()->back()->with($notification);
    
        }
    
    ////////////Restaurantmanager inactive /////////////////
    
        public function status_inactive($id){
    
            Restaurantmanager::findOrFail($id)->update(['status' => 0]);
    
            $notification = array(
                'message' => 'Restaurantmanager Inactive Successfully',
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
