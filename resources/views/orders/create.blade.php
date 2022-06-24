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
                                            <li class="breadcrumb-item active">Create Orders</li>
                                    </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
       @csrf
              
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Orders</h4>

                    <div class="pull-right float-right" style="text-align:right"> <a class="btn btn-primary btn-sm " href="{{ route('orders') }}"><i class="fas fa-minus"></i> Back </a></div>   
 
                </div>

        
        <div class="card-body">

       
            <input class="form-control" type="hidden" name="hotel_id" value="1" id="hotel_id">
            <div class="row">
            <div class="col-lg-6">
            <div>
            <div class="mb-3">
            <label for="order_invoice" class="form-label">Order Invoice</label>
            <input class="form-control" type="text" name="order_invoice" value="{{$invoice_number}}" id="order_invoice" readonly>
            </div>
           
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" name="email" value="" id="email">
            </div>  
                                                       
            </div>
            </div>

            <div class="col-lg-6">
            <div class="mt-3 mt-lg-0">

            <div class="mb-3">
            <label for="customer_name" class="form-label">Customer Name</label>
            <input class="form-control" type="text" name="customer_name" value="" id="customer_name">
            </div> 
            <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input class="form-control" type="text" name="phone" value="" id="phone">
            </div>       
                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">

    <div class="form-group">
                    <span><h3>Order Items </h3></span>


                    <table class="table table-bordered table-hover" id="product_info_table">
                  <thead>
                    <tr>
                      <th style="width:30%">Item</th>
                      <th style="width:10%">Quantity</th>
                      <th style="width:10%">Rate</th>
                      <th style="width:20%">Amount</th>
                      <th style="width:10%"><button type="button" id="add_row" class="btn btn-info"><i class="fa fa-plus"></i></button></th>
                    </tr>
                  </thead>

                   <tbody>
                     <tr id="row_1">
                       <td>
                        <select class="form-control select_group product" data-row-id="row_1" id="product_1" name="addmoreattr[0][item_name]" style="width:100%;" onchange="getProductData(1)" required>
                           
                            <option value="" selected="" >Select Item</option>
                @foreach($items as $prod)
                        <option value="{{$prod->id}}">{{$prod->item_name}}</option>
                @endforeach 
                    </select>

                        </td>
                      
                        <td>
                      
                          <input type="text" name="addmoreattr[0][item_quantity]" id="qty_1" class="form-control" required onkeyup="getTotal(1)">


                        </td>
                        <td>
                          <input type="text" name="addmoreattr[0][item_price]" id="rate_1" class="form-control" readonly autocomplete="off">
                          <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td>
                          <input type="text" name="addmoreattr[0][sub_total]" id="amount_1" class="form-control" readonly autocomplete="off">
                          <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td><button type="button" class="btn btn-danger" onclick="removeRow('1')"><i class="fa fa-close"></i>x</button></td>
                    
                 
                    
                      </tr>
                   </tbody>
                </table>


        
</div>


<div class="row">
<div class="col-lg-6">

</div>

<div class="col-lg-6">
<div class="mb-3">
<label for="Gross Amount">Amount</label>
<input type="text" value="" class="form-control" id="gross_amount" name="gross_amount" readonly autocomplete="off">


</div>
</div>


<div class="col-lg-6">

</div>

<div class="col-lg-6">
<div class="mb-3">
<label for="Amount">Discount</label>
<input type="text" value="" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" autocomplete="off">

</div>
</div>


<div class="col-lg-6">

</div>

<div class="col-lg-6">
<div class="mb-3">
<label for="Amount">Net Amount</label>
<input type="text" value=""  name="net_amount" id="net_amount" class="form-control" id="amount" placeholder="Net Amount" readonly>

</div>
</div>

				

</div>






    <div class="mt-4" style="text-align:right">
    <button type="submit" class="btn btn-primary w-md">Submit</button>
    </div>

              </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>      
           
           
           <script type="text/javascript">
           
           
           $(document).ready(function() {
             //$(".select_group").select2();
             // $("#description").wysihtml5();
           
            
           
           /*   $("#OrderMainNav").addClass('active');
             $("#createOrderSubMenu").addClass('active');
             
             var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
                 'onclick="alert(\'Call your custom code here.\')">' +
                 '<i class="glyphicon glyphicon-tag"></i>' +
                 '</button>'; 
            */
           
           
             // Add new row in the table 
             $("#add_row").unbind('click').bind('click', function(e) {
               e.preventDefault();
               var table = $("#product_info_table");
               var count_table_tbody_tr = $("#product_info_table tbody tr").length;
               var row_id = count_table_tbody_tr + 1;
          
               $.ajax({
                   //url: base_url + '/orders/getTableProductRow/',
                   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                  
                   url: "{{  url('items/getproduct') }}/",
                   type: 'get',
                   dataType: 'json',
                   success:function(response) {
                     
                       // console.log(reponse);
                        var html = '<tr id="row_'+row_id+'">'+
                            '<td>'+ 
                             '<select class="form-control select_group product" data-row-id="'+row_id+'" id="product_'+row_id+'" name="addmoreattr['+row_id+'][item_name]" style="width:100%;" onchange="getProductData('+row_id+')">'+
                                 '<option value="">Select Item</option>';
                                 $.each(response, function(index, value) {
                                   html += '<option value="'+value.id+'">'+value.item_name+'</option>';             
                                 });
                                 
                               html += '</select>'+
                             '</td>'+ 
           
                             '<td> <input type="text" value="" name="addmoreattr['+row_id+'][item_quantity]" id="qty_'+row_id+'" class="form-control" onkeyup="getTotal('+row_id+')"></td>'+
                             '<td><input type="text" value="" name="addmoreattr['+row_id+'][item_price]" id="rate_'+row_id+'" class="form-control" readonly><input type="hidden" name="rate_value[]" id="rate_value_'+row_id+'" class="form-control"></td>'+
                             '<td><input type="text" value="" name="addmoreattr['+row_id+'][sub_total]" id="amount_'+row_id+'" class="form-control" readonly><input type="hidden" name="amount_value[]" id="amount_value_'+row_id+'" class="form-control"></td>'+
                             '<td><button type="button" class="btn btn-danger" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i>x</button></td>'+
                             '</tr>';
           
           
                           
                         if(count_table_tbody_tr >= 1) {
                    
                         $("#product_info_table tbody tr:last").after(html);
                         //$("#field").after(html);  
                       }
                       else {
                      
                         $("#product_info_table tbody").html(html);
                       }
           
                       //$(".product").select2();
           
                   }
                 });
           
               return false;
             });
           
           }); // /document
           
           function getTotal(row = null) {
             if(row) {
               var total = Number($("#rate_value_"+row).val()) * Number($("#qty_"+row).val());
               total = total.toFixed(2);
               $("#amount_"+row).val(total);
               $("#amount_value_"+row).val(total);
               
               subAmount();
           
             } else {
               alert('no row !! please refresh the page');
             }
           }
           
           // get the product information from the server
           function getProductData(row_id)
           {
             var id = $("#product_"+row_id).val();
           
             //alert(id);    
             if(id == "") {
               $("#rate_"+row_id).val("");
               $("#rate_value_"+row_id).val("");
           
               $("#qty_"+row_id).val("");           
               
               $("#amount_"+row_id).val("");
               $("#amount_value_"+row_id).val("");
           
             } else {
               $.ajax({
                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                 //url: "{{ url('/purchase/getProductValueById') }}/",
                 url: "{{  url('/items/getProductValueById') }}/"+id,
                 type: 'get',
                 data: {id : id},
                 dataType: 'json',
                 success:function(response) {
                   // setting the rate value into the rate input field
                   
                   $("#rate_"+row_id).val(response.item_price);
                   $("#rate_value_"+row_id).val(response.item_price);
           
                     $("#qty_"+row_id).val(1);
                    
           
                   $("#qty_value_"+row_id).val(1);
           
                   
           
                   var total = Number(response.item_price) * 1;
                   total = total.toFixed(2);
                   $("#amount_"+row_id).val(total);
                   $("#amount_value_"+row_id).val(total);
           
           
                
                   
                   subAmount();
                 } // /success
               }); // /ajax function to fetch the product data 
             }
           }
           
           // calculate the total amount of the order
           function subAmount() {
            
           
             var tableProductLength = $("#product_info_table tbody tr").length;
             var totalSubAmount = 0;
           
            
           
             for(x = 0; x < tableProductLength; x++) {
               var tr = $("#product_info_table tbody tr")[x];
               var count = $(tr).attr('id');
               count = count.substring(4);
           
               totalSubAmount = Number(totalSubAmount) + Number($("#amount_"+count).val());
             } // /for
           
             totalSubAmount = totalSubAmount.toFixed(2);
           
             // sub total
             $("#gross_amount").val(totalSubAmount);
             $("#gross_amount_value").val(totalSubAmount);
           
             
             
             // total amount
             var totalAmount = (Number(totalSubAmount));
             totalAmount = totalAmount.toFixed(2);
             // $("#net_amount").val(totalAmount);
             // $("#totalAmountValue").val(totalAmount);
           
             var discount = $("#discount").val();
             if(discount) {
               var grandTotal = Number(totalAmount) - Number(discount);
               grandTotal = grandTotal.toFixed(2);
               $("#net_amount").val(grandTotal);
               $("#net_amount_value").val(grandTotal);
             } else {
               $("#net_amount").val(totalAmount);
               $("#net_amount_value").val(totalAmount);
               
             } // /else discount 
           
           } // /sub total amount
           
           function removeRow(tr_id)
           {
             $("#product_info_table tbody tr#row_"+tr_id).remove();
             subAmount();
           }
           </script>   
                     




         


                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

   
    </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
          
            @endsection
            
            
