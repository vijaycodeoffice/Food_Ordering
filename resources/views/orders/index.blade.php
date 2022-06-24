@extends('app')
@section('content')
 
                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Orders</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Orders</li>
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
                    <h4 class="card-title">Orders List</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('orders.create') }}"><i class="fas fa-plus"></i> Add Orders </a></div>   
 
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
                                <th>Order Invoice</th>
                                <th>Order date</th>
                                <th>Order Cost</th>
                             
                                <th>Status</th>
                             
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>

                        @php

                    $sno = 1;	
                    @endphp
                   @foreach ($orders as $item)

                            <tr>
                                <td>{{$sno++}}</td>
                                <td>{{$item->order_invoice}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->net_amount}}</td>
                               
                                <td> @if ($item->status == 1)
					<span class="badge badge-pill badge-success" style="background-color: green;">Delivered</span>
				@else
				<span class="badge badge-pill badge-danger" style="background-color: red;">Processing</span> 
				@endif</td>


                <td>  
    
    <a class="btn btn-info btn-sm" href="{{ route('orders.show', $item->id) }}">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  View
                              </a></td>
                            
            




            </tr>
                     
                    
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

