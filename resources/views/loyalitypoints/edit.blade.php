@extends('app')
@section('content')
 

                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Loyality Point</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Edit Loyality Point</li>
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
                    <h4 class="card-title">Edit Loyality Point</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('loyalitypoints') }}"><i class="fas fa-minus"></i> Back </a></div>   
 
                </div>

  
                
        <div class="card-body">

        <form action="{{ route('loyalitypoints.update',$loyalitypoints->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input class="form-control" type="hidden" name="hotel_id" value="1" id="hotel_id">
            <input class="form-control" type="hidden" name="id" value="{{ $loyalitypoints->id}}" id="id">
            <div class="row">
            <div class="col-lg-6">
            <div>
            <div class="mb-3">
            <label for="earning_point" class="form-label">Earning Point</label>
            <input class="form-control" type="text" name="earning_point" value="{{ $loyalitypoints->earning_point}}" id="earning_point">
            </div>
           
            <div class="mb-3">
            <label for="earning_point_value" class="form-label">Earning Point Value</label>
            <input class="form-control" type="text" name="earning_point_value" value="{{ $loyalitypoints->earning_point_value}}" id="earning_point_value">
            </div>
         
            <div class="mb-3">
            <label for="redeeming_point" class="form-label">Redeeming Point</label>
            <input class="form-control" type="text" name="redeeming_point" value="{{ $loyalitypoints->redeeming_point}}" id="redeeming_point">
            </div>

            <div class="mb-3">
            <label for="redeeming_point_value" class="form-label">Redeeming Point value</label>
            <input class="form-control" type="text" name="redeeming_point_value" value="{{ $loyalitypoints->redeeming_point_value}}" id="redeeming_point_value">
            </div>
                                
                               
            </div>
            </div>

            <div class="col-lg-6">
            <div class="mt-3 mt-lg-0">
            <div class="mb-3">
            <label for="reward_point_for_registration" class="form-label">Reward Point For Registration</label>
            <input class="form-control" type="text" name="reward_point_for_registration" value="{{ $loyalitypoints->redeeming_point_value}}" id="reward_point_for_registration">
            </div>
          
            <div class="mb-3">
            <label for="reward_point_for_fristorder" class="form-label">Reward Point For First Order</label>
            <input class="form-control" type="text" name="reward_point_for_fristorder" value="{{ $loyalitypoints->reward_point_for_fristorder}}" id="reward_point_for_fristorder">
            </div>
            <div class="mb-3">
            <label for="reward_point_for_sharingapp" class="form-label">Reward Point For App Sharing</label>
            <input class="form-control" type="text" name="reward_point_for_sharingapp" value="{{ $loyalitypoints->reward_point_for_sharingapp}}" id="reward_point_for_sharingapp">
            </div>
            <div class="mb-3">
            <label for="reward_point_for_review" class="form-label">Reward Point For Review</label>
            <input class="form-control" type="text" name="reward_point_for_review" value="{{ $loyalitypoints->reward_point_for_review}}" id="reward_point_for_review">
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

