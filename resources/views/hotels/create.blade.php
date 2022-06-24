@extends('app')
@section('content')
 

                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Hotels</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Create Hotels</li>
                                    </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Hotel</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('hotels') }}"><i class="fas fa-minus"></i> Back </a></div>   
 
                </div>

  
                
        <div class="card-body">
        <form action="{{ route('hotels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-lg-6">
            <div>

            <div class="mb-3">
            <label for="langauge" class="form-label">Langauge</label>
    
            <select name="langauge_id" id="langauge_id" class="form-control">
                        <option value="0" selected="" >Select Langauge</option>
                @foreach($langauges as $lang)
                        <option value="{{$lang->id}}">{{$lang->langauge_name}}</option>
                @endforeach 
                    </select>

            </div>


            <div class="mb-3">
            <label for="hotel_name" class="form-label">Hotel Name</label>
            <input class="form-control" type="text" name="hotel_name" value="" id="hotel_name">
            </div>
           
            <div class="mb-3">
            <label for="hotel_email" class="form-label">Email</label>
            <input class="form-control" type="text" name="hotel_email" value="" id="hotel_email">
            </div>

            <div class="mb-3">
            <label for="hotel_contact" class="form-label">Contact</label>
            <input class="form-control" type="text" name="hotel_contact" value="" id="hotel_contact">
            </div>
                                
                               
            </div>
            </div>

            <div class="col-lg-6">
            <div class="mt-3 mt-lg-0">

            <div class="mb-3">
            <label for="Country" class="form-label">Country</label>
    
            <select name="country_id" id="country_id" class="form-control">
                        <option value="0" selected="" >Select Country</option>
                @foreach($country as $count)
                        <option value="{{$count->id}}">{{$count->country_name}}</option>
                @endforeach 
                    </select>

            </div>


            <div class="mb-3">
            <label for="hotel_code" class="form-label">Hotel Code</label>
            <input class="form-control" type="text" name="hotel_code" value="" id="hotel_code">
            </div>
            <div class="mb-3">
            <label for="hotel_address" class="form-label">Address</label>
            <input class="form-control" type="text" name="hotel_address" value="" id="hotel_address">
            </div>

            <div class="mb-3">
            <label for="hotel_password" class="form-label">Password</label>
            <input class="form-control" type="text" name="hotel_password" value="" id="hotel_password">
            </div>
                                
                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="mt-4" style="text-align:right">
    <button type="submit" class="btn btn-primary w-md">Submit</button>
    </div>

    </form>


                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @endsection

