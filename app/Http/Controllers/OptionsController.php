<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Options;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class OptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Options::latest()->get();  
        return view('options.index', compact('options'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get(); 
        return view('options.create', compact('langauges'));   
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
            'options_name' => 'required',
          
        ]);

    
        $options_id = Options::insertGetId([
          
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'options_name' => $request->options_name,
            'options_description' => $request->options_description,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('options')->with('success','Options add ');
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
        $options = Options::findOrFail($id);
        $langauges = Langauges::latest()->get(); 
        return view('options.edit', compact('langauges','options'));
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
            'options_name' => 'required',
          
        ]);
        $options_id = $request->id;

        Options::findOrFail($options_id)->update([
    
         
            'langauge_id' => $request->langauge_id,
            'options_name' => $request->options_name,
            'options_description' => $request->options_description,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('options')->with('success','Options Update ');
    }


    ////////////Options active /////////////////

 public function status_active($id){

    Options::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Options Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Options inactive /////////////////

    public function status_inactive($id){

        Options::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Options Inactive Successfully',
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
