<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Addons;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class AddonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addons = Addons::latest()->get(); 
        return view('addons.index', compact('addons'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get(); 
        return view('addons.create',compact('langauges'));   
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
            'addons_name' => 'required',
            'addons_image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $image = $request->file('addons_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(350,350)->save('public/upload/addons/thumbnail/'.$name_gen);
        $save_url = 'public/upload/addons/thumbnail/'.$name_gen;

        $addons_id = Addons::insertGetId([
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'addons_name' => $request->addons_name,
            'addons_price' => $request->addons_price,
            'addons_image' => $save_url,
            'addons_description' => $request->addons_description,
         
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('addons')->with('success','Addons add ');



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
        $addons = Addons::findOrFail($id);
        $langauges = Langauges::latest()->get(); 
        return view('addons.edit', compact('addons','langauges'));
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
       
        $addons_id = $request->id;
        $old_image = $request->old_image;
    
        if ($request->file('addons_image')) {
            
        unlink($old_image);
        $image = $request->file('addons_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('public/upload/addons/thumbnail/'.$name_gen);
        $save_url = 'public/upload/addons/thumbnail/'.$name_gen;
    
        Addons::findOrFail($addons_id)->update([
    
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'addons_name' => $request->addons_name,
            'addons_price' => $request->addons_price,
            'addons_image' => $save_url,
            'addons_description' => $request->addons_description,
         
            'status' => 1,
              
            
            ]);
                $notification = array(
                    'message' => 'Addons updated Successfully',
                    'alert-type' => 'success'
                );
                
                return redirect()->route('addons')->with($notification);
                
            }else{
                Addons::findOrFail($addons_id)->update([
                    'langauge_id' => $request->langauge_id,
                    'hotel_id' => $request->hotel_id,
                    'addons_name' => $request->addons_name,
                    'addons_price' => $request->addons_price,
                     'addons_description' => $request->addons_description,
                 
                    'status' => 1,
                 
                    
                ]);
                    $notification = array(
                        'message' => 'Addons updated Without Image Successfully',
                        'alert-type' => 'success'
                    );
                    
                    return redirect()->route('addons')->with($notification); 
       
                }
       
    }


 ////////////Addons active /////////////////

 public function status_active($id){

    Addons::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Addons Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Addons inactive /////////////////

    public function status_inactive($id){

        Addons::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Addons Inactive Successfully',
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
