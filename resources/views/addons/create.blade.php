@extends('app')
@section('content')
 

                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Addons</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Create Addons</li>
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
                    <h4 class="card-title">Create Addons</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('addons') }}"><i class="fas fa-minus"></i> Back </a></div>   
 
                </div>

   
                
        <div class="card-body">
        <form action="{{ route('addons.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
            <div class="col-lg-6">
            <div>

            <div class="mb-3">
            <label for="langauge" class="form-label">Langauge</label>
            <input class="form-control" type="hidden" name="hotel_id" value="1" id="hotel_id">


            <select name="langauge_id" id="langauge_id" class="form-control">
                        <option value="0" selected="" >Select Langauge</option>
                @foreach($langauges as $lang)
                        <option value="{{$lang->id}}">{{$lang->langauge_name}}</option>
                @endforeach 
                    </select>

        

            </div>

            <div class="mb-3">
            <label for="addons_name" class="form-label">Addons Name</label>
            <input class="form-control" type="text" name="addons_name" value="" id="addons_name">
            </div>
           
            <div class="mb-3">
            <label for="addons_description" class="form-label">Description</label>
            <input class="form-control" type="text" name="addons_description" value="" id="addons_description">
            </div>
          
                                
                               
            </div>
            </div>

            <div class="col-lg-6">
            <div class="mt-3 mt-lg-0">
            <div class="mb-3">
            <label for="addons_image" class="form-label">Addons Image</label>
            
            <input type="file" name="addons_image" class="custom-file-input form-control" id="addons_image">
            

            </div>

            <div class="mb-3">
            <label for="addons_price" class="form-label">Price</label>
            <input class="form-control" type="text" name="addons_price" value="" id="addons_price">
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

