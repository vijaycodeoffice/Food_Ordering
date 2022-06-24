<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tables;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Tables::latest()->get(); 
        return view('tables.index', compact('tables'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langauges = Langauges::latest()->get(); 
        return view('tables.create', compact('langauges'));    
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
            'tables_name' => 'required',
          
        ]);

    
        $tables_id = Tables::insertGetId([
          
            'langauge_id' => $request->langauge_id,
            'hotel_id' => $request->hotel_id,
            'tables_name' => $request->tables_name,
            'tables_code' => $request->tables_code,
            'tables_description' => $request->tables_description,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('tables')->with('success','Tables add ');
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
        $tables = Tables::findOrFail($id);
        $langauges = Langauges::latest()->get(); 
        return view('tables.edit', compact('langauges','tables'));
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
            'tables_name' => 'required',
          
        ]);
        $table_id = $request->id;

        Tables::findOrFail($table_id)->update([
    
            'langauge_id' => $request->langauge_id,
            'tables_name' => $request->tables_name,
            'tables_code' => $request->tables_code,
            'tables_description' => $request->tables_description,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('tables')->with('success','Tables Update ');

    }



////////////Tables active /////////////////

public function status_active($id){

    Tables::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Tables Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Tables inactive /////////////////

    public function status_inactive($id){

        Tables::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Tables Inactive Successfully',
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
