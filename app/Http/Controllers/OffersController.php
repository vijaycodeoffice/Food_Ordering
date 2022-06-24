<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offers;
use App\Models\Langauges;
use App\Models\Menus;
use App\Models\Items;
use carbon\carbon;
use Image;
use Session;
use Illuminate\Support\Facades\DB;


class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offers::latest()->get();
        return view('offers.index', compact('offers')); 
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
        $items = Items::latest()->get(); 
        return view('offers.create', compact('langauges','menus','items'));   
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
            'addmore.*.item_name' => 'required',
           
           
        ]);


       // dd($request->addmore);

        $offer_id = Offers::insertGetId([
            'hotel_id' => $request->hotel_id,
            'langauge_id' => $request->langauge_id,
            'offer_name' => $request->offer_name,
            'offer_price' => $request->offer_price,
            'offer_start_date' => $request->offer_start_date,  
            'offer_valid_date' => $request->offer_valid_date,
            'offer_image' => $request->offer_image, 
            'offer_conditions' => $request->offer_conditions,
            'gross_amount' => $request->gross_amount,  
            'status' => 1,
            'created_at' => Carbon::now(), 
  
          ]);

          foreach ($request->addmore as $key => $value) {

           DB::table('offermenus')->insert([

            'offer_id' => $offer_id,
            'hotel_id' => $request->hotel_id,
            'langauge_id' => $request->langauge_id,
            'item_name' => $value['item_name'],
            'item_quantity' => $value['item_quantity'],
            'item_price' => $value['item_price'],
            'sub_total' => $value['sub_total'],
            'created_at' => Carbon::now(), 
            'status' => 1
        ]); 

         


    }
    return redirect()->route('orders')->with('success','Order Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offers = Offers::findOrFail($id);
      
        $offerid= $offers->id;

        $offermenus = DB::table('offermenus')
        ->join('offers', 'offers.id', '=', 'offermenus.offer_id')
        ->join('items', 'items.id', '=', 'offermenus.item_name')
        ->select('offermenus.*', 'offers.*','items.item_name',)
        ->where('offermenus.offer_id', $offerid)->get();
    
         return view('offers.show',compact('offers','offermenus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }


////////////Offers active /////////////////

public function status_active($id){

    Offers::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Offers Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Offers inactive /////////////////

    public function status_inactive($id){

        Offers::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Offers Inactive Successfully',
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
