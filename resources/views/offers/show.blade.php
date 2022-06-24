@extends('app')
@section('content')
   
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
            
            </div>

            <form action="#" method="get" enctype="multipart/form-data">
            @csrf

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Offers
                    
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->

              <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
 
        <address>
          <strong>{{$offers->offer_name}}</strong><br>
         
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
       
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Valid From:  {{$offers->offer_start_date}}</b><br>
     
        <span class="float-right"><b>Valid Date:  {{$offers->offer_valid_date}} </b></span>
      </div>
      <!-- /.col -->
    </div>

              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                    <th>SN.</th>
                     
                      <th>Item Name</th>
                      <th>Qty</th>
                      <th>Rate</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>

                    @php
					$sno = 1;	
				@endphp
			@foreach ($offermenus as $item)
                    
                    <tr>
                    <td>{{ $sno++ }}</td>
                      
                      <td>{{$item->item_name}}</td>
                     <td>{{$item->item_quantity}}</td>
                      <td>{{$item->item_price}}</td>
                      <td>{{$item->sub_total}}</td>
                    </tr>
                    <tr>

                    @endforeach
                      
                              
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">   


              </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
               

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Amount:</th>
                        <td>Rs {{$offers->gross_amount}}</td>
                      </tr>
                    
                     
                      <tr>
                        <th>Offer Amount:</th>
                        <td>Rs {{$offers->offer_price}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                <a class="btn btn-primary " href="{{ route('offers') }}"> Back </a>
                  <a href="#" rel="noopener" target="_blank" class="btn btn-primary float-right"><i class="fas fa-print"></i> Print</a>
                  
              
                </div>
              </div>
            </div>

            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

   
  @endsection
  