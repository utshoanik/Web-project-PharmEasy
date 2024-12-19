<?php 
use App\Http\Controllers\ProductController;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
$total=0;
$count=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
  $userId=Session::get('user')['id'];
  $noti=DB::select('SELECT * FROM notifications where user_id=?',[$userId]);
  $count = DB::table('notifications')->where('user_id', $userId)->count();
  
}

?>

<nav class="navbar navbar-default">
    <div class="container-fluid navbar-default ">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="https://assets.pharmeasy.in/apothecary/images/logo_big.svg?dim=256x0" alt="logo_big"></a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          @if (Session::has('user'))
            <li class="active"><a href="#">Home</a></li>
          <li><a href="/myorders">Orders</a></li>
          @endif
          
          
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>

        <ul class="nav navbar-nav navbar-right">
          @if(Session::has('user'))<li><a href="/cartlist">cart({{$total}})</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          @endif
        </ul>

        {{-- notification start --}}
        @if (Session::has('user'))
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notification (<b>{{$count}}</b>)</a>
            <ul class="dropdown-menu notify-drop">
              <div class="notify-drop-title">
                <div class="row">
                  
                  <div class="col-md-6 col-sm-6 col-xs-6">Notification</div>
                  <div class="col-md-6 col-sm-6 col-xs-6 text-right"><a href="" class="rIcon allRead" data-tooltip="tooltip" data-placement="bottom" title="tümü okundu."><i class="fa fa-dot-circle-o"></i></a></div>
                </div>
              </div>
              <!-- end notify title -->
              <!-- notify content -->
              
  
                @if (Session::has('user'))
                @foreach ( $noti as $data )

                @php($img=DB::select('SELECT * FROM products where id=?',[$data->product_id]))
                <div class="drop-content">
                  <li>
                    @if ($data->message=='Confirm')
                  <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img logofit"><img src="{{$img[0]->gallery}}" alt="" class="logofit"></div></div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l3">
                    <a href="">your product has been placed successfully</a>
                    @elseif ($data->message=='cancelled')
                    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img logofit"><img src="{{$img[0]->gallery}}" alt="" class="logofit"></div></div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l3">
                    <a href="">Sorry,your order has been cancelled</a>
                    @elseif ($data->message=='pres_confirm')
                    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img logofit"><img src="https://st4.depositphotos.com/25868248/28055/v/1600/depositphotos_280556388-stock-illustration-clinical-record-prescription-medical-checkup.jpg" alt="" class="logofit"></div></div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l3">
                    <a href="">we received your prescription ,medicine will be placed soon</a>

                    @else
                    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img logofit"><img src="https://media.istockphoto.com/id/500489798/vector/businessman-hands-holding-sorry-sign.jpg?s=2048x2048&w=is&k=20&c=YLktEgQV-TjdgCxm8e8RbWTjyk1tjP3Ji5JB6rZk1I4=" alt="" class="logofit"></div></div>
                  <div class="col-md-9 col-sm-9 col-xs-9 pd-l3">
                    <a href="">Sorry,your prescribed medicine are unavailabe right now</a>
                    @endif
                  </div>
                  
                </li>
                 </div>
                @endforeach
                @endif


                    {{-- @if ($data->message=='Confirm')
                      
                    @elseif ($data->message=='pres_confirm')

                    @elseif ($data->message=='pres_cancel')

                    @else
                    @endif --}}



              
              <div class="notify-drop-footer text-center">
                <a href=""><i class="fa fa-book"></i> Mark All Read</a>
              </div>
            </ul>
          </li>
        </ul>
        @endif
         
        {{-- notification end --}}
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>