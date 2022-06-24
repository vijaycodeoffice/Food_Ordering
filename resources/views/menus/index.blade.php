@extends('app')
@section('content')
 
                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Menu</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Menu</li>
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
                    <h4 class="card-title">Menu List</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('menus.create') }}"><i class="fas fa-plus"></i> Add Menu </a></div>   
 
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
                                <th>Menu Name</th>
                                <th>Menu Code</th>
                                <th>Punch Line</th>
                                <th>Menu Image</th>
                                <th>Menu Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            
                        @php

$sno = 1;	
@endphp
@foreach ($menus as $item)




                            <tr>
                            <td>{{ $sno++ }}</td>
                                <td>{{$item->menu_name}}</td>
                                <td>{{$item->menu_code}}</td>
                                <td>{{$item->punch_line}}</td>
                                <td><img src="{{ asset($item->menu_image) }}" style=" width:100px; height:80px;"></td>
                                <td>{{$item->menu_description}}</td>
                                <td>
                                @if ($item->status == 1)
					<span class="badge badge-pill badge-success" style="background-color: green;">Active</span>
				@else
				<span class="badge badge-pill badge-danger" style="background-color: red;">Inactive</span> 
				@endif


                                </td>   

                                <td>  
    
    @if ($item->status == 1)
                    <a href="{{ route('menus.inactive', $item->id) }}" class="btn btn-danger" title="inactive now">
                        <i class="fa fa-arrow-down"></i></a>
                @else
                <a href="{{ route('menus.active', $item->id) }}" class="btn btn-success " title="active now">
                    <i class="fa fa-arrow-up"></i></a>
                @endif
    
    <a class="btn btn-info btn-sm" href="{{ route('menus.edit', $item->id) }}">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a></td>



                            </tr>
                     
                    
                            @endforeach
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

