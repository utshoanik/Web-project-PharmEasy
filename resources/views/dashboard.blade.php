@extends('layouts.app')
 
@section('title', 'Dashboard - Laravel Admin Panel With Login and Registration')
 
@section('contents')
<style>
  .box {
      width: 350px;
      height:200px;
      display: inline-block;
      margin: 10px;
      box-shadow: 1px 2px 3px slategray;
    border-radius: 10px;
    text-align: center;
            line-height: 100px;
            font-size: 16px;
          color: black;
      
  }

  .box1 {
      background-color: rgb(91, 198, 224);
  }

  .box2 {
      background-color: rgb(176, 115, 241);
  }

  .box3 {
      background-color: rgba(231, 136, 177, 0.74);
  }
  .box4 {
      background-color: rgba(164, 235, 200, 0.74);
  }

  .variable {
  font-size: 60px; /* Adjust the font size as per your requirements */
  text-align: center; /* Center the text horizontally */
  padding-bottom:40px;
  margin-bottom: 20px; /* Add padding around the variable text */
  box-sizing: border-box; /* Ensure the padding is included in the element's total width */
}
</style>
<body>
<div class="box box1">
   Total Order Pending
   <div class="variable">{{$or}}</div>
</div>
<div class="box box2">
  Total Prescription Confirmation Pending
  <div class="variable">{{$pres}}</div>
</div>
<div class="box box3">
  Total Product Number
  <div class="variable">{{$pro}}</div>
  
</div>

<div class="box box4">
  Total User
  <div class="variable">{{$user}}</div>
  
</div>
</body>
@endsection

