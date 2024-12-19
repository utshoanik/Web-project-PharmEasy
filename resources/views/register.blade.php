{{-- @extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST" >
            @csrf

               <div class="form-group">
                <label for="exampleInputEmail1">User name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="User Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection --}}



<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
  rel="stylesheet"
/>

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <h1>welcome to <a class="name" href="{{route('homepage')}}">PharmEasy</a></h1>
          <img src="https://media.istockphoto.com/id/1409152762/vector/pharmacy-assistant-illustration-concept-on-white-background.jpg?s=2048x2048&w=is&k=20&c=25eVp5G1uqMIbSuk-YzfVLL0sUfxi9vyLBmDuJkDPnE="
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="register" method="POST">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                @csrf
              <p class="lead fw-normal mb-0 me-3">Please Register you account</p>
              
            </div>
  
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0"></p>
            </div>
            <!-- Email name -->
            <div class="form-outline mb-4">
                <input type="text" id="form3Example3" name="name" class="form-control form-control-lg"
                  placeholder="Enter your name">
                <label class="form-label" for="form3Example3">User Name</label>
              </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address">
              <label class="form-label" for="form3Example3">Email address</label>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
                
              <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                placeholder="Enter password">
              <label class="form-label" for="form3Example4">Password</label>
            </div>

  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{route('login')}}"
                  class="link-danger">Log In</a></p>
            </div>
  
          </form>
        </div>
      </div>
    </div>
    <div
      class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
        Copyright © 2020. All rights reserved.
      </div>
      <!-- Copyright -->
  
      <!-- Right -->
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <!-- Right -->
    </div>
  </section>
  <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>

  <style>

    .name{
        color: #1bcadee8
    }
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
  </style>
