<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::latest()->get(); 
        return view('country.index', compact('country'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get(); 
        return view('country.create', compact('langauges'));   
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
            'country_name' => 'required',
          
        ]);

    
        $country_id = Country::insertGetId([
            'langauge_id' => $request->langauge_id,
            'country_name' => $request->country_name,
            'country_code' => $request->country_code,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('countries')->with('success','Country add ');
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
        $country = Country::findOrFail($id);
        return view('country.edit', compact('country','langauges'));
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
        $country_id = $request->id;

        Country::findOrFail($country_id)->update([
    
            'langauge_id' => $request->langauge_id,
            'country_name' => $request->country_name,
            'country_code' => $request->country_code,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('countries')->with('success','Country UpDate ');



    }



////////////Country active /////////////////

public function status_active($id){

    Country::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Country Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Country inactive /////////////////

    public function status_inactive($id){

        Country::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Country Inactive Successfully',
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
