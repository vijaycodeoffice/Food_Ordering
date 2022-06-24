<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\Langauges;
use App\Models\City;
use carbon\carbon;
use Image;
use Session;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::latest()->get(); 
        return view('cities.index', compact('cities'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get();
        $countries = Country::latest()->get();  
        return view('cities.create', compact('langauges','countries'));  
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
            'city_name' => 'required',
          
        ]);

    
        $city_id = City::insertGetId([
            'langauge_id' => $request->langauge_id,
            'country_id' => $request->country_name,
            'city_name' => $request->city_name,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('cities')->with('success','City add ');
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
        $countries = Country::latest()->get();  
        $cities = City::findOrFail($id);
        return view('cities.edit', compact('cities','langauges','countries'));
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
            'country_name' => 'required',
          
        ]);
        $city_id = $request->id;

        City::findOrFail($city_id)->update([
    
            'langauge_id' => $request->langauge_id,
            'country_id' => $request->country_name,
            'city_name' => $request->city_name,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('cities')->with('success','City Update ');
    }


///////////City active /////////////////

public function status_active($id){

    City::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'City Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////City inactive /////////////////

    public function status_inactive($id){

        City::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'City Inactive Successfully',
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
