@extends('master')
@section("content")
<div class="container" style="background-color: white">
   <div class="row">
       <div class="col-sm-6" style="box-shadow: 0px 0px 2px rgba(112, 131, 128, 0.833); height:500px;display: flex;justify-content: center;
       align-items: center;
       place-items: center;">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">Go Back</a>
       <h2>{{$product['name']}}</h2>
       <h3>Price : {{$product['price']}} tk</h3>
       <h4>Details: {{$product['description']}}</h4>
       <h4>category: {{$product['category']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       <!--  -->
       <!-- <a class="btn btn-success" href="" redirect="ordernow">Order Now</a> -->

       <button class="btn btn-success" >Buy Now</button>
       <br><br>
    </div>
   </div>
</div>
@endsection