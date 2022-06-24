<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Itemstypes;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class ItemstypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemstypes = Itemstypes::latest()->get();
        return view('itemstypes.index', compact('itemstypes'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get(); 
        return view('itemstypes.create', compact('langauges'));   
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
            'itemtypes_name' => 'required',
          
        ]);

    
        $itemtypes_id = Itemstypes::insertGetId([
          
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'itemtypes_name' => $request->itemtypes_name,
            'itemtypes_description' => $request->itemtypes_description,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('itemstypes')->with('success','Item add ');
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
        $itemstypes = Itemstypes::findOrFail($id);
        return view('itemstypes.edit', compact('itemstypes','langauges'));
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
            'itemtypes_name' => 'required',
          
        ]);
        $itemtypes_id = $request->id;

        Itemstypes::findOrFail($itemtypes_id)->update([
    
            'langauge_id' => $request->langauge_id,
            'itemtypes_name' => $request->itemtypes_name,
            'itemtypes_description' => $request->itemtypes_description,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('itemstypes')->with('success','Itemstypes Update');



    }


 ////////////Itemstypes active /////////////////

 public function status_active($id){

    Itemstypes::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Itemstypes Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Itemstypes inactive /////////////////

    public function status_inactive($id){

        Itemstypes::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Itemstypes Inactive Successfully',
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
