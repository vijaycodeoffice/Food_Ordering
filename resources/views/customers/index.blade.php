@extends('app')
@section('content')
 
                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Customer</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Customer</li>
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
                    <h4 class="card-title">Customer List</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('customers.create') }}"><i class="fas fa-plus"></i> Add Customer </a></div>   
 
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
                                <th>Cusomer Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>CardNumber</th>
                                <th>Points</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>

                        @php
                        // header('Content-type: image/jpeg');
//print_r($customers);
                    $sno = 1;	
                    @endphp
                   
                    @foreach($customers as $customer)
    @foreach($customers['Result'] as $item)
        
  
                   

                            <tr>
                                <td>{{$sno++}}</td>
                                <td>{{ $item['FirstName'].' ' .$item['LastName'] }}</td>
                                <td>{{ $item['Mobile'] }}</td> 
                                <td>{{ $item['Email'] }}</td> 
                                <td>{{ $item['CardNumber'] }}</td>
                                <td>{{ $item['CurrentPoints'] }}</td> 
                                
                                <td> <a class="btn btn-info btn-sm" href="{{ route('customers.show', $item['Mobile']) }}">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  View
                              </a></td>

            </tr>
                     
            @endforeach
@endforeach   
             
                        
                       
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

