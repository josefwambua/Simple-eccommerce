<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   
   <style>
    .center{
        margin: auto;
        width:70%;
        padding:30px;
        text-align: center;
    }
    table,th, td{
        border:1px solid grey;
    }
    .th_deg{
        font-size: 30px;
        padding: 5px;
        background: skyblue;
    }
    .img_deg{
        width: 200px;
        height: 200px;	
    }
    .ttal_deg{
        font-size:20px;
        padding: 15px;
        font-style: italic;
        font-weight: bold;
    }
   </style>
   
    </head>
   <body>
      <div class="hero_area">
         @include('home.header')
       
         @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
        @endif
    <div class="center">
        <table>
            <tr>
                <th class="th_deg">Product title</th>
                <th class="th_deg">product quantity</th>
                <th class="th_deg">price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>
            </tr>
            

            <?php $totalprice=0; ?>
            @foreach($cart as $cart)
            <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>Ksh {{$cart->price}}</td>
                <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
                <td> <a class="btn btn-danger" onclick="return confirm('Are you sure you want to remove this product')" href="{{url('remove_cart',$cart->id)}}">Remove Product</a></td>
            </tr>
            <?php $totalprice=$totalprice + $cart->price ?>
            @endforeach
            
        </table>
        <div class="ttal_deg">
            <h1>Total Price: Ksh{{$totalprice}}</h1>
        </div>
    </div>
    <div style="text-align: center; padding-bottom: 10%;">
        
    
    <h1 style="font-size: 20px; padding: 10px;">Proceed to Order</h1>
        <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On delivery</a>
        
        
        <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Pay Using Card</a>
    </div>


     
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>