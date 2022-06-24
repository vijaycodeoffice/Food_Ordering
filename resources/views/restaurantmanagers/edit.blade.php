@extends('app')
@section('content')
 

                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Restaurant Managers</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Edit Restaurant Managers</li>
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
                    <h4 class="card-title">Edit Restaurant Managers</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('restaurantmanagers') }}"><i class="fas fa-minus"></i> Back </a></div>   
 
                </div>

  
                
        <div class="card-body">

        <form action="{{ route('restaurantmanagers.update',$restaurantmanagers->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="hidden" name="hotel_id" value="{{$restaurantmanagers->hotel_id}}" id="hotel_id">
            <div class="row">
            <div class="col-lg-6">
            <div>
            <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" name="name" value="{{$restaurantmanagers->name}}" id="name">
            </div>
           
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" name="email" value="{{$restaurantmanagers->email}}" id="email">
            </div>

                                
                               
            </div>
            </div>

            <div class="col-lg-6">
            <div class="mt-3 mt-lg-0">


            <div class="mb-3">
            <label for="langauge" class="form-label">Langauge</label>
    
            <select name="langauge_id" id="langauge_id" class="form-control">
                <option value="0" selected="" >Select Langauge</option>
                @foreach($langauges as $lang)
                        <option {{$restaurantmanagers->langauge_id== $lang->id ? 'selected':''}} value="{{$lang->id}}">{{$lang->langauge_name}}</option>
                @endforeach 
                    </select>

            </div>

            <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input class="form-control" type="text" name="phone" value="{{$restaurantmanagers->phone}}" id="phone">
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
    <button type="submit" class="btn btn-primary w-md">Update</button>
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

