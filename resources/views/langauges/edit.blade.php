@extends('app')
@section('content')
 

                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Langauge</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Edit Langauge</li>
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
                    <h4 class="card-title">Edit Langauge</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('langauges') }}"><i class="fas fa-minus"></i> Back </a></div>   
 
                </div>

  
                
        <div class="card-body">

        <form action="{{ route('langauges.update',$langauges->id) }}" method="POST" enctype="multipart/form-data">
            @csrf



            <div class="row">
            <div class="col-lg-6">
            <div>
            <div class="mb-3">
            <label for="langauge_name" class="form-label">Langauge Name</label>
            <input class="form-control" type="hidden" name="id" value="{{ $langauges->id}}" id="id">
            <input class="form-control" value="{{ $langauges->langauge_name}}" type="text" name="langauge_name" value="" id="langauge_name">
            </div>
           
         
                                
                               
            </div>
            </div>

            <div class="col-lg-6">
            <div class="mt-3 mt-lg-0">
            <div class="mb-3">
            <label for="langauge_code" class="form-label">Langauge Code</label>
            <input class="form-control" value="{{ $langauges->langauge_code}}" type="text" name="langauge_code" value="" id="langauge_code">
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

