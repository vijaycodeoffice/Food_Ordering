<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menus;
use App\Models\Langauges;
use App\Models\Itemstypes;
use App\Models\Addons;
use App\Models\Items;
use carbon\carbon;
use Image;
use Session;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::latest()->get();
        return view('items.index', compact('items'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get();
        $menus = Menus::latest()->get(); 
        $addons = Addons::latest()->get(); 
        $itemstypes = Itemstypes::latest()->get();        
        return view('items.create', compact('langauges','menus','addons','itemstypes'));  
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
            'item_name' => 'required',
            'item_image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $image = $request->file('item_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(350,350)->save('public/upload/items/thumbnail/'.$name_gen);
        $save_url = 'public/upload/items/thumbnail/'.$name_gen;

        $items_id = Items::insertGetId([
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'menu_id' => $request->menu_id,
            'item_type' => $request->item_type,
            'item_name' => $request->item_name,
            'item_price' => $request->item_price,
            'addons' => $request->addons,
            'is_popular' => $request->is_popular,
            'item_image' => $save_url,
            'item_description' => $request->item_description,
         
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('items')->with('success','Item add Sucess ');
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
        $items = Items::findOrFail($id);
        $langauges = Langauges::latest()->get();
        $menus = Menus::latest()->get(); 
        $addons = Addons::latest()->get(); 
        $itemstypes = Itemstypes::latest()->get(); 


        return view('items.edit', compact('langauges','items','menus','addons','itemstypes'));
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
        $items_id = $request->id;
        $old_image = $request->old_image;
    
        if ($request->file('item_image')) {
            
        unlink($old_image);
        $image = $request->file('item_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(350,350)->save('public/upload/items/thumbnail/'.$name_gen);
        $save_url = 'public/upload/items/thumbnail/'.$name_gen;
    
        Items::findOrFail($items_id)->update([
    
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'menu_id' => $request->menu_id,
            'item_type' => $request->item_type,
            'item_name' => $request->item_name,
            'item_price' => $request->item_price,
            'addons' => $request->addons,
            'is_popular' => $request->is_popular,
            'item_image' => $save_url,
            'item_description' => $request->item_description,
            'status' => 1,
              
            
            ]);
                $notification = array(
                    'message' => 'Items updated Successfully',
                    'alert-type' => 'success'
                );
                
                return redirect()->route('items')->with($notification);
                
            }else{
                Items::findOrFail($items_id)->update([
                    'langauge_id' => $request->langauge_id,
                    'hotel_id' => $request->hotel_id,
                    'menu_id' => $request->menu_id,
                    'item_type' => $request->item_type,
                    'item_name' => $request->item_name,
                    'item_price' => $request->item_price,
                    'addons' => $request->addons,
                    'is_popular' => $request->is_popular,
                    'item_description' => $request->item_description,
                 
                    'status' => 1,
                 
                    
                ]);
                    $notification = array(
                        'message' => 'Items updated Without Image Successfully',
                        'alert-type' => 'success'
                    );
                    
                    return redirect()->route('items')->with($notification); 
       
                }
    }


 ////////////Items active /////////////////

 public function status_active($id){

    Items::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Items Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Items inactive /////////////////

    public function status_inactive($id){

        Items::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Items Inactive Successfully',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);


        }



        public function getproduct()
        {
            $items = Items::orderBy('id','ASC')->get();
            return json_encode($items);
        
            
        
        }
        
        public function getProductValueById($id)
        {
        $items = Items::findOrFail($id);
        return json_encode($items);
         
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
