<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customers;
use App\Models\Langauges;
use carbon\carbon;
use Image;
use Session;

class CustomerController extends Controller
{
    public function index()
    {
      
        $customers = json_decode(file_get_contents('http://103.159.183.18:8010/Api/KitConn/GetAllGuestDetails'), true);


        return view('customers.index', compact('customers'));   
    }

    public function create()
    {
        $langauges = Langauges::latest()->get(); 
        return view('customers.create', compact('langauges'));   
    }


    public function show($id)
    {
        //
    }




}
