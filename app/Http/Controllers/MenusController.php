<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menus;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menus::latest()->get();
        return view('menus.index', compact('menus'));  
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get();  
        return view('menus.create', compact('langauges'));  
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
            'menu_name' => 'required',
            'menu_image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $image = $request->file('menu_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(350,350)->save('public/upload/menus/thumbnail/'.$name_gen);
        $save_url = 'public/upload/menus/thumbnail/'.$name_gen;

        $menus_id = Menus::insertGetId([
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'menu_name' => $request->menu_name,
            'punch_line' => $request->punch_line,
            'menu_code' => $request->menu_code,
            'menu_image' => $save_url,
            'menu_description' => $request->menu_description,
         
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('menus')->with('success','Menus add ');
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
        $menus = Menus::findOrFail($id);
        $langauges = Langauges::latest()->get(); 
        return view('menus.edit', compact('langauges','menus'));
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
       
        $menu_id = $request->id;
        $old_image = $request->old_image;
    
        if ($request->file('menu_image')) {
            
        unlink($old_image);
        $image = $request->file('menu_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(350,350)->save('public/upload/menus/thumbnail/'.$name_gen);
        $save_url = 'public/upload/menus/thumbnail/'.$name_gen;
    
        Menus::findOrFail($menu_id)->update([
    
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'menu_name' => $request->menu_name,
            'punch_line' => $request->punch_line,
            'menu_code' => $request->menu_code,
            'menu_image' => $save_url,
            'menu_description' => $request->menu_description,
         
            'status' => 1,
              
            
            ]);
                $notification = array(
                    'message' => 'Menu updated Successfully',
                    'alert-type' => 'success'
                );
                
                return redirect()->route('menus')->with($notification);
                
            }else{
                Menus::findOrFail($menu_id)->update([
                    'langauge_id' => $request->langauge_id,
                    'hotel_id' => $request->hotel_id,
                    'menu_name' => $request->menu_name,
                    'punch_line' => $request->punch_line,
                    'menu_code' => $request->menu_code,
                    'menu_description' => $request->menu_description,
                 
                    'status' => 1,
                 
                    
                ]);
                    $notification = array(
                        'message' => 'Menu updated Without Image Successfully',
                        'alert-type' => 'success'
                    );
                    
                    return redirect()->route('menus')->with($notification); 
       
                }
       
       
       
    
    }


 ////////////Menus active /////////////////

 public function status_active($id){

    Menus::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Menu Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Menus inactive /////////////////

    public function status_inactive($id){

        Menus::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Menu Inactive Successfully',
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
