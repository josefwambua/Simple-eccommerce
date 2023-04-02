<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .title_deg{
            font: 2em sans-serif;
            text-align: center;
            padding-bottom: 40px;
            font-size: 25px;
            
        }
        .table_deg{
            border: 2px solid green;
            width: 100%;
            margin: auto;
            text-align: center;
        }
        .th_deg{
            background-color: #057353;
        }
        .img_deg{
            width: 100px;
            height: 100px;
        }
        </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
            @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          

          <h1 class="title_deg"> All Order</h1>
        <table class="table_deg">
            <tr class="th_deg">

        <th style="padding: 10px;">Name</th>
        <th style="padding: 10px;">Email</th>
        <th style="padding: 10px;">Address</th>
        <th style="padding: 10px;">Phone</th>
        <th style="padding: 10px;">Product title</th>
        <th style="padding: 10px;">Quantity</th>
        <th style="padding: 10px;">Price</th>
        <th style="padding: 10px;">Payment Status</th>
        <th style="padding: 10px;">Delivery Status</th>
        <th style="padding: 10px;">Image</th>
        <th style="padding: 10px;">Delivered</th>
        <th style="padding: 10px;">Print Pdf</th>
            </tr>

        @foreach ($order as $order )
            <tr>
        <td>{{$order->name}}</td>
        <td>{{$order->email}}</td>
        <td>{{$order->address}}</td>
        <td>{{$order->phone}}</td>
        <td>{{$order->product_title}}</td>
        <td>{{$order->quantity}}</td>
        <td>Ksh {{$order->price}}</td>
        <td>{{$order->payment_status}}</td>       
        <td>{{$order->delivery_status}}</td>
        <td>
        <img class="img_deg" src="/product/{{$order->image}}">
        </td>

        <td>
        @if($order->delivery_status == 'processing')

            <a href="{{url('delivered',$order->id)}}" 
            onclick="return confirm('Are you sure this product is delivered !!!')"
            class="btn btn-primary">Delivered</a>
        @else

        <p style="color:Green;">Delivered</p>

        @endif
        </td>

        <td>
            <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print Pdf</a>
        </td>

            </tr>
        @endforeach

        </table>
    
        
        
        
        
        
        
        </div>
          </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>