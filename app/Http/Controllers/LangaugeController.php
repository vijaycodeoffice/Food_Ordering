<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Langauges;
use Session;
use carbon\carbon;
use Image;


class LangaugeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langauges = Langauges::latest()->get(); 
        return view('langauges.index', compact('langauges'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('langauges.create');   
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
            'langauge_name' => 'required',
          
        ]);

    
        $langauge_id = Langauges::insertGetId([
          
            'langauge_name' => $request->langauge_name,
            'langauge_code' => $request->langauge_code,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
  
          ]);
  
          return redirect()->route('langauges')->with('success','Langauge add ');
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
        $langauges = Langauges::findOrFail($id);
        return view('langauges.edit', compact('langauges'));
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
            'langauge_name' => 'required',
          
        ]);
        $langauge_id = $request->id;

        Langauges::findOrFail($langauge_id)->update([
    
         
            'langauge_name' => $request->langauge_name,
            'langauge_code' => $request->langauge_code,
            'status' => 1,
                   
            'created_at' => Carbon::now(), 
               
            ]);
  
          return redirect()->route('langauges')->with('success','Langauge Update ');
    }


////////////langauge active /////////////////

public function status_active($id){

    Langauges::findOrFail($id)->update(['status' => 1]);

    $notification = array(
        'message' => 'Langauge Active Successfully',
        'alert-type' => 'success'
    );

return redirect()->back()->with($notification);

    }

////////////Langauges inactive /////////////////

    public function status_inactive($id){

        Langauges::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Langauge Inactive Successfully',
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
