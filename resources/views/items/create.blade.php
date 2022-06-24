@extends('app')
@section('content')
 

                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Items Description</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Create Items Description</li>
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
                    <h4 class="card-title">Create Items Description</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('items') }}"><i class="fas fa-minus"></i> Back </a></div>   
 
                </div>

  
                
        <div class="card-body">

<form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="hidden" name="hotel_id" value="1" id="hotel_id">
            <div class="row">
            <div class="col-lg-6">
            <div>
            <div class="mb-3">
            <label for="menu_name" class="form-label">Menu Name</label>
            <select name="menu_id" id="menu_id" class="form-control">
                        <option value="0" selected="" >Select Menu</option>
                @foreach($menus as $menu)
                        <option value="{{$menu->id}}">{{$menu->menu_name}}</option>
                @endforeach 
                    </select>
            </div>
           
            <div class="mb-3">
            <label for="item_name" class="form-label">Item name</label>
            <input class="form-control" type="text" name="item_name" value="" id="item_name">
            </div>

            <div class="mb-3">
            <label for="item_type" class="form-label">Item Types</label>
            <select name="item_type" id="item_type" class="form-control">
                        <option value="0" selected="" >Select Item Type</option>
                @foreach($itemstypes as $itemtype)
                        <option value="{{$itemtype->itemtypes_name}}">{{$itemtype->itemtypes_name}}</option>
                @endforeach 
                    </select>
            </div>
                 
            <div class="mb-3">
            <label for="addons" class="form-label">Addons</label>
    
            <select name="addons" id="addons" class="form-control">
                        <option value="0" selected="" >Select Addons</option>
                @foreach($addons as $addon)
                        <option value="{{$addon->id}}">{{$addon->addons_name}}</option>
                @endforeach 
                    </select>

            </div>

            <div class="mb-3">
            <label for="item_image" class="form-label">Item Image</label>
            <input class="form-control" type="file" name="item_image" value="" id="item_image">
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
                        <option value="{{$lang->id}}">{{$lang->langauge_name}}</option>
                @endforeach 
                    </select>

            </div>
            <div class="mb-3">
            <label for="item_price" class="form-label">Item Price</label>
            <input class="form-control" type="text" name="item_price" value="" id="item_price">
            </div>

            <div class="mb-3">
            <label for="item_description" class="form-label">Item Description</label>
            <input class="form-control" type="text" name="item_description" value="" id="item_description">
            </div>

            <div class="mb-3">
            <label for="is_popular" class="form-label">Is it popular Item</label>
           
            <select name="is_popular" id="is_popular" class="form-control">
                        <option value="0" selected="" >Select Any</option>
             
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
             
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

