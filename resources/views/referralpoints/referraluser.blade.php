@extends('app')
@section('content')
 
                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Referral User</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Referral User</li>
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
                    <h4 class="card-title">Referral User List</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('referralpoints') }}"><i class="fas fa-minus"></i> Back </a></div>   
 
                </div>

  
                
                <div class="card-body">
                @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif 

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                            <th>Sr.no</th>
                                <th>Refer User</th>
                                <th>Point</th>
                                <th>Referd By</th>
                                <th>Point</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                               
                                <td>



                                </td>   

                                <td>  

    
    <a class="btn btn-info btn-sm" href="#">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  View
                              </a></td>



                            </tr>
                     
                    
                     
                        
                       
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @endsection

