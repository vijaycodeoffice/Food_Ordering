
@extends('app')
@section('content')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
       
                    
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Menu</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="">10</span>
                            </h4>
                        </div>

                        <div class="col-6">
                            <div id="menu"  class="mb-2"> <img src="{{asset('assets/icons/menu.png')}}" width="50" height="50"  /></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-success"><a href="#">View</a></span>
                       
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Items</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="10">10</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="#"  class="mb-2"><img src="{{asset('assets/icons/ffff.png')}}" width="50" height="50"  /></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-success"><a href="#">View</a></span>
                      
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col-->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Add-ons</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="44">11</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="#"  class="mb-2"><img src="{{asset('assets/icons/salad.png')}}" width="50" height="50"  /></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-success"><a href="#">View</a></span>
                    
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Options</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="57">10</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="#" class="mb-2"><img src="{{asset('assets/icons/food-delivery.png')}}" width="50" height="50"  /></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                      <span class="badge bg-soft-success text-success"><a href="#">View</a></span>
                       
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->
	
	<!-- second row -->
	
	 <div class="row">
	 
	 
	 <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Offers</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="">10</span>
                            </h4>
                        </div>

                        <div class="col-6">
                            <div id="#" class="mb-2"><img src="{{asset('assets/icons/offf.jpg')}}" width="50" height="50"  /></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-success"><a href="#">View</a></span>
                       
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Customers</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="10">10</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="#"  class="mb-2"><img src="{{asset('assets/icons/user_1.png')}}" width="50" height="50"  /></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-success"><a href="#">View</a></span>
                      
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col-->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Orders</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="44">11</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="#"  class="mb-2"> <img src="{{asset('assets/icons/order-food.png')}}" width="50" height="50"  /></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-success"><a href="#">View</a></span>
                    
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Tables</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="57">10</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="#"  class="mb-2"><img src="{{asset('assets/icons/table.png')}}" width="50" height="50"  /></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                      <span class="badge bg-soft-success text-success"><a href="#">View</a></span>
                       
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
	 
	 
	 
	 
	 
	 </div>
	
	
	
	

    <div class="row">
        <div class="col-xl-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center mb-6">
                        <h5 class="card-title me-2">Orders</h5>
                        <div class="ms-auto">
                         
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-sm">
                            <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]' class="apex-charts">
                            </div>
                        </div>
                        <div class="col-sm align-self-center">
                            <div class="mt-4 mt-sm-0">
                                <div>
                                    <p class="mb-2"><i
                                            class="mdi mdi-circle align-middle font-size-10 me-2 text-success"></i> Today Order
                                    </p>
                                    <h6>Orders = <span class="text-muted font-size-14 fw-normal">32</span></h6>
                                </div>

                                <div class="mt-4 pt-2">
                                    <p class="mb-2"><i
                                            class="mdi mdi-circle align-middle font-size-10 me-2 text-primary"></i> Last Week
                                    </p>
                                    <h6>Orders = <span class="text-muted font-size-14 fw-normal">64</span></h6>
                                </div>

                                <div class="mt-4 pt-2">
                                    <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-info"></i>
                                        Last Month</p>
                                    <h6>Orders = <span class="text-muted font-size-14 fw-normal">109</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="row">
               
                <!-- end col -->

                <div class="col-xl-8">
                    <!-- card -->
                    <div class="card bg-primary text-white shadow-primary card-h-100">
                        <!-- card body -->
                        <div class="card-body p-0">
                            <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel"
                                data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="text-center p-4">
                                            <i class="mdi mdi-bitcoin widget-box-1-icon"></i>
                                            <div class="avatar-md m-auto">
                                                <span
                                                    class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                    <i class="mdi mdi-currency-btc"></i>
                                                </span>
                                            </div>
                                            <h4 class="mt-3 lh-base fw-normal text-white"><b>New</b> Offers</h4>
                                            <p class="text-white-50 font-size-13">ggg prices fell sharply amid the
                                                global sell-off in equities. Negative news
                                                over the ggg past week has dampened ggg basics
                                                sentiment for ggg. </p>
                                            <button type="button" class="btn btn-light btn-sm">View details <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                    <!-- end carousel-item -->
                                    <div class="carousel-item">
                                        <div class="text-center p-4">
                                            <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                                            <div class="avatar-md m-auto">
                                                <span
                                                    class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                    <i class="mdi mdi-ethereum"></i>
                                                </span>
                                            </div>
                                            <h4 class="mt-3 lh-base fw-normal text-white"><b>Offers</b> New</h4>
                                            <p class="text-white-50 font-size-13">ff prices fell sharply amid the
                                                global sell-off in equities. Negative news
                                                over the f past week has dampened f basics
                                                sentiment for f. </p>
                                            <button type="button" class="btn btn-light btn-sm">View details <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                    <!-- end carousel-item -->
                                    <div class="carousel-item">
                                        <div class="text-center p-4">
                                            <i class="mdi mdi-litecoin widget-box-1-icon"></i>
                                            <div class="avatar-md m-auto">
                                                <span
                                                    class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                    <i class="mdi mdi-litecoin"></i>
                                                </span>
                                            </div>
                                            <h4 class="mt-3 lh-base fw-normal text-white"><b>Offers</b> New</h4>
                                            <p class="text-white-50 font-size-13">fff prices fell sharply amid the
                                                global sell-off in equities. Negative news
                                                over the ff past week has dampened ff basics
                                                sentiment for f. </p>
                                            <button type="button" class="btn btn-light btn-sm">View details <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                    <!-- end carousel-item -->
                                </div>
                                <!-- end carousel-inner -->

                                <div class="carousel-indicators carousel-indicators-rounded">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <!-- end carousel-indicators -->
                            </div>
                            <!-- end carousel -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end col -->
    </div> <!-- end row-->

   
    @endsection

             