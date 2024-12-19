

@extends('layouts.app')
 
@section('title', 'Orders')
 
@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">User</h6>
    </div>
    <div class="card-body">
      {{-- <a href="{{ route('category.add') }}" class="btn btn-primary mb-3">Add Category</a> --}}
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>User Id</th>
              <th>User name</th>
              <th>Email Address</th>
              <th>Action</th>
              
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($user as $row)
            
              <tr>
               @if ($row->is_admin==0)
                 <th>{{ $no++ }}</th>
                <td>{{ $row->id }}</td>
                <td>{{$row->name}}</td>
                <td>{{ $row->email }}</td>
               
                
                


                <td>
                   {{-- <a href="{{ route('pre_order.confirm', ['id'=>$row->id]) }}" class="btn btn-warning">Confirm</a>   --}}
                  <a href="{{ route('user.delete', ['id'=>$row->id]) }}" class="btn btn-danger">Delete</a>  
                </td>
              </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection