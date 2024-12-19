@extends('master')
@section("content")


 @if (!empty($data) && isset($data[0]))
      
<div class="shop-categories container">
    <h1 class="title">{{$data[0]->category}}</h1>
    <div>
     
        
     
  @foreach($data as $item)
  <a href="{{url('detail')}}/{{$item->id}}">
    <div class="trening-item" style="margin: 15px; background-color: rgba(255, 255, 255, 0.874); color: white; padding: 10px 20px;  border:none; border-radius: 10px;width: 13vw; height: 165px;box-shadow: 1px 1px 1px rgba(44, 43, 43, 0.833); alli">
          
        <img class="trending-image" src="{{$item->gallery}}">
        <div class="">
          <h5 style="color: black">{{$item->name}}</h3>
          <h5 style="color: black"> tk {{$item->price}}</h3>
        </div>
      </div>
</a>
  @endforeach
    </div>
</div>
 @else
      <h1>No products found.</h1>
 @endif
@endsection