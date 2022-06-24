<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\Langauges;
use App\Models\Hotels;
use carbon\carbon;
use Image;
use Session;


class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hotels = Hotels::latest()->get();
        return view('hotels.index', compact('hotels'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get(); 
        $country = Country::latest()->get();  
        return view('hotels.create',compact('langauges','country'));   
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
            'hotel_name' => 'required',
           
        ]);

        $hotel_id = Hotels::insertGetId([
            'langauge_id' => $request->langauge_id,
            'country_id' => $request->country_id,
            'hotel_name' => $request->hotel_name,
            'hotel_code' => $request->hotel_code,
            'hotel_email' => $request->hotel_email,
            'hotel_address' => $request->hotel_address,
            'hotel_contact' => $request->hotel_contact,
            'hotel_password' => $request->hotel_password,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('hotels')->with('success','Hotel add ');


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
        $country = Country::latest()->get();
        $hotels = Hotels::findOrFail($id);
        return view('hotels.edit', compact('country','langauges','hotels'));
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
            'hotel_name' => 'required',
          
        ]);
        $hotel_id = $request->id;

        Hotels::findOrFail($hotel_id)->update([
    
            'langauge_id' => $request->langauge_id,
            'country_id' => $request->country_id,
            'hotel_name' => $request->hotel_name,
            'hotel_code' => $request->hotel_code,
            'hotel_email' => $request->hotel_email,
            'hotel_address' => $request->hotel_address,
            'hotel_contact' => $request->hotel_contact,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('hotels')->with('success','Hotel Update ');
    }


////////////Hotels active /////////////////

public function status_active($id){

    Hotels::findOrFail($id)->update(['status' => 1]);

    $success = array(
        'message' => 'Hotels Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($success);

    }

////////////Hotels inactive /////////////////

    public function status_inactive($id){

        Hotels::findOrFail($id)->update(['status' => 0]);

        $success = array(
            'message' => 'Hotels Inactive Successfully',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($success);


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
