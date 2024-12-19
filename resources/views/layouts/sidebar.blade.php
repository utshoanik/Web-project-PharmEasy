{{-- //resources/views/layouts/sidebar.blade.php --}}
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PharmaEasy</div>
  </a>
 
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
 
  <!-- Nav Item - Dashboard -->

  <li class="nav-item">
    <a class="nav-link" href="{{route('userinfo')}}">  {{-- --}}
     <i class="fas fa-fw fa-tachometer-alt"></i>
     <span>User</span></a>
 </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('pre_order') }}">  {{-- --}}
     <i class="fas fa-fw fa-tachometer-alt"></i>
     <span>Prescription</span></a>
 </li>


  <li class="nav-item">
     <a class="nav-link" href="{{ route('order') }}">  {{-- --}}
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Order</span></a>
  </li>
 
  <li class="nav-item">
     <a class="nav-link" href="{{ route('products') }}">      {{-- --}}
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Product</span></a>
  </li>
 
    {{-- @if (auth()->user()->level == 'Admin') --}}
  <li class="nav-item">
    <a class="nav-link" href="/category">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Category</span></a>
  </li>
    {{-- @endif --}}
 
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
 
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
 
  <!-- Sidebar Message -->
  {{-- <div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
  </div> --}}
 
</ul>