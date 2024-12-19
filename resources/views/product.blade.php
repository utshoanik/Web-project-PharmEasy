@extends('master')
@section("content")
<div >
{{-- <div class="custom-product container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
        <div class="item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallery']}}">
            <div class="carousel-caption slider-text">
              <h3>{{$item['name']}}</h3>
              <p>{{$item['description']}}</p>
            </div>
            </a>
          </div>
    
          @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> --}}

      <div>
        @include('slider')
      
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script>
              $(document).ready(function() {
        var slider = $('.slider');
        var slideWidth = $('.slider img').width();
        var slideCount = $('.slider img').length;
        var currentIndex = 0;
        var interval;
      
        function slide() {
          currentIndex++;
          if (currentIndex >= slideCount) {
            currentIndex = 0;
          }
          var translateX = -currentIndex * slideWidth;
          slider.css('transform', 'translateX(' + translateX + 'px)');
        }
      
        function startSlide() {
          interval = setInterval(slide, 3000);
        }
      
        function stopSlide() {
          clearInterval(interval);
        }
      
        slider.hover(stopSlide, startSlide);
        startSlide();
      });
      
          </script> --}}
      </div>


     <!--shop categories start-->

	
     <div class="shop-categories container">
		<h1 class="title">Shop by categories</h1>
		
      @foreach($categories as $item)
      <a href="cat_detail/{{$item['name']}}">
        <div class="trening-item" style="margin: 10px; background-color: rgb(255, 255, 255); color: white; padding: 10px 20px;  border:none; border-radius: 10px;width: 10vw; height: 150px;box-shadow: 1px 1px 2px rgba(112, 131, 128, 0.833);">
        
        <img class="trending-image" src="{{$item['photo']}}">
        <div class="">
          <h5 style="color: black">{{$item['name']}}</h3>
        </div>
      </div>
    </a>
      @endforeach
		
	</div>
    <!--shop categories end-->


    <br><br>
    <!--ORDER WITH PRESCRIPTION start-->
	<div class="order_with-prescription">
		<div>
			<img src="https://assets.pharmeasy.in/apothecary/images/rx_upload.svg?dim=1024x0
			" alt="">
			<div>
				<h3>Order with prescription</h3>
				<p>Upload prescription and we will delivery your medicine</p>
        @php($title='Upload')

        @if (Session::has('user'))
        {{$title='Confrim Order'}}
        
        <form action="/prescription" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
         <label for="">Upload(only image) </label>
         <input type="file" name="photo" id="photo" class="form-control" placeholder="Upload your prescription" aria-describedby="helpId" required>
         <div class="form-group">
           <label for="">Address</label>
           <input type="text" name="address" id="address" class="form-control" placeholder="address" aria-describedby="helpId" required>
         </div>
       </div>
       <button style="background-color: rgb(1, 135, 135); color: white; padding: 10px 20px; border: none; border-radius: 5px;">
        <i class="fa-solid fa-paperclip"></i>
       {{$title}}
     </button>
        </form>
          

       @else
       <button style="background-color: rgb(1, 135, 135); color: white; padding: 10px 20px; border: none; border-radius: 5px;">
         	<i class="fa-solid fa-paperclip"></i>
					{{$title}}
				</button>
        @endif
        
			</div>
		</div>
		<div>
			<h4>How does this work? </h4>
			<div>
				<div>
					<h3>1</h3>
					<p>Upload photo of your prescription</p>
				</div>
				<div>
					<h3>2</h3>
					<p>Add delivery address and place the order</p>
				</div>
				<div>
					<h3>3</h3>
					<p>We will call you to confrim the medicine</p>
				</div>
				<div>
					<h3>4</h3>
					<p>Now sit back! your medicine will get delivery at your doorstep</p>
				</div>
			</div>
		</div>
	</div>
	<!--ORDER WITH PRESCRIPTION end-->


      <div class="trending-wrapper shop-categories container">
        <br>
        <h1 class="title">Tredning Products</h1>
        @foreach($products as $item)
        <a href="detail/{{$item['id']}}">
          <div class="trening-item" style="margin: 15px; background-color: rgba(255, 255, 255, 0.73); color: white; padding: 10px 20px;   border-radius: 10px;width: 15vw; height: 170px;box-shadow: 1px 1px 1px rgba(91, 90, 90, 0.559); ">
          
          <img class="trending-image" src="{{$item['gallery']}}">
          <div class="">
            <h5 style="color: black">{{$item['name']}}</h3>
          </div>
        </div>
      </a>
        @endforeach
      </div>
    




</div>
</div>


{{-- <div>
  @include('slider')

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
  var slider = $('.slider');
  var slideWidth = $('.slider img').width();
  var slideCount = $('.slider img').length;
  var currentIndex = 0;
  var interval;

  function slide() {
    currentIndex++;
    if (currentIndex >= slideCount) {
      currentIndex = 0;
    }
    var translateX = -currentIndex * slideWidth;
    slider.css('transform', 'translateX(' + translateX + 'px)');
  }

  function startSlide() {
    interval = setInterval(slide, 3000);
  }

  function stopSlide() {
    clearInterval(interval);
  }

  slider.hover(stopSlide, startSlide);
  startSlide();
});

    </script>
</div> --}}



@endsection