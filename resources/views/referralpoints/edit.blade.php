@extends('app')
@section('content')
 

                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Referral Points</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Edit Referral Points</li>
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
                    <h4 class="card-title">Edit Referral Points</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('referralpoints') }}"><i class="fas fa-minus"></i> Back </a></div>   
 
                </div>

  
                
        <div class="card-body">

        <form action="{{ route('referralpoints.update',$referralpoints->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
           
            <input class="form-control" type="hidden" name="hotel_id" value="1" id="hotel_id">


            <div class="row">
            <div class="col-lg-6">
            <div>
            <div class="mb-3">
            <label for="refering_point" class="form-label">Point Of Referring Person</label>
            <input class="form-control" type="text" name="refering_point" value="{{ $referralpoints->refering_point}}" id="refering_point">
            </div>
           
         
                                
                               
            </div>
            </div>

            <div class="col-lg-6">
            <div class="mt-3 mt-lg-0">
            <div class="mb-3">
            <label for="refered_point" class="form-label">Point Of Refered Person</label>
            <input class="form-control" type="text" name="refered_point" value="{{$referralpoints->refered_point}}" id="refered_point">
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

