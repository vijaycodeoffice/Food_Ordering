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
                    <i class="fas fa-globe"></i> Order Invoice.
                    
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->

              <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Bravia Hotel</strong><br>
          Email: help@braviahotel.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
       
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice Number # {{$orders->order_invoice}}</b><br>
     
        <span class="float-right">Date:  {{date_format($orders->created_at,"d-m-Y")}} </span>
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
			@foreach ($orderitems as $item)
                    
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
                  <p class="lead">Payment Methods: Cash     


              </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
               

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Gross Amount:</th>
                        <td>Rs {{$orders->gross_amount}}</td>
                      </tr>
                      <tr>
                        <th>Discount</th>
                        <td>Rs {{$orders->discount}}</td>
                      </tr>
                     
                      <tr>
                        <th>Net Amount:</th>
                        <td>Rs {{$orders->net_amount}}</td>
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
                <a class="btn btn-primary " href="{{ route('orders') }}"> Back </a>
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
  