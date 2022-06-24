@extends('app')
@section('content')
 

                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Country</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Edit Country</li>
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
                    <h4 class="card-title">Edit Country</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('countries') }}"><i class="fas fa-plus"></i> Back </a></div>   
 
                </div>

      
        <div class="card-body">
        <form action="{{ route('countries.update',$country->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input class="form-control" value="{{ $country->id}}" type="hidden" name="country_id"  id="country_id">
            <div class="row">
            <div class="col-lg-6">
            <div>
            <div class="mb-3">
            <label for="country_name" class="form-label">Country Name</label>
            <input class="form-control" value="{{ $country->country_name}}" type="text" name="country_name"  id="country_name">
            </div>
           
            <div class="mb-3">
            <label for="country_code" class="form-label">Country Code</label>
            <input class="form-control" value="{{ $country->country_code}}" type="text" name="country_code"  id="country_code">
            </div>
                                               
            </div>
            </div>

            <div class="col-lg-6">
            <div class="mt-3 mt-lg-0">

            <div class="mb-3">
            <label for="langauge_id" class="form-label">Langauge</label>
            <select name="langauge_id" id="langauge_id" class="form-control">
                        <option value="0" selected="" >Select Langauge</option>
                @foreach($langauges as $lang)
                        <option {{ $country->langauge_id == $lang->id ? 'selected' :'' }} value="{{$lang->id}}">{{$lang->langauge_name}}</option>
                @endforeach 
                    </select>
  
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

