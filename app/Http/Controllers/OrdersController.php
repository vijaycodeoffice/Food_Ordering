<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Orders;
use App\Models\Items;
use App\Models\Langauges;
use Illuminate\Support\Facades\DB;
use carbon\carbon;
use Image;
use Session;

use Illuminate\Support\Arr;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::latest()->get();  
        return view('orders.index', compact('orders'));   
    }


    public function invoiceNumber()
    {
        $orders = Orders::all();
    
        if($orders->isEmpty())
        {
            $invoice = 'ORDER0001';
            return $invoice;
        }
    
        foreach($orders as $order)
        {
            $latest = Orders::latest()->first();
    
            if($latest->id == true)
            {
                $invoice = 'ORDER000'.$latest->id+1;
                return $invoice;
            }
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $invoice_number = self::invoiceNumber();
        $items = Items::latest()->get(); 
        return view('orders.create', compact('items','invoice_number'));   
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
            'addmoreattr.*.item_name' => 'required',
           
        ]);
       
     // $count = count($request->addmoreattr);
       // dd($count);

    
        $order_id = Orders::insertGetId([
            'hotel_id' => $request->hotel_id,
            'order_invoice' => $request->order_invoice,
            'customer_name' => $request->customer_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gross_amount' => $request->gross_amount,
            'discount' => $request->discount,  
            'net_amount' => $request->net_amount, 
            'status' => 1,
            'created_at' => Carbon::now(), 
  
          ]);
         

          foreach ($request->addmoreattr as $key => $value) {

           DB::table('orderitems')->insert([

            'order_id' => $order_id,
            'item_name' => $value['item_name'],
            'item_quantity' => $value['item_quantity'],
            'item_price' => $value['item_price'],
            'sub_total' => $value['sub_total'],
            'order_invoice' => $request->order_invoice,
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
        $orders = Orders::findOrFail($id);
      
   
        $inoiveno= $orders->order_invoice;
      
    
        $orderitems = DB::table('orderitems')
        ->join('items', 'items.id', '=', 'orderitems.item_name')
       // ->join('customers', 'customers.id', '=', 'orderitems.customer_id')
        ->select('orderitems.*', 'items.item_name')
        ->where('orderitems.order_invoice', $inoiveno)->get();
    
         return view('orders.show',compact('orders','orderitems'));
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
