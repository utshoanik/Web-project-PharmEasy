

@extends('layouts.app')
 
@section('title', 'Orders')
 
@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Order</h6>
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
              <th>Address</th>
              <th>Photo</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($prescription as $row)
            
              <tr>
               
                <th>{{ $no++ }}</th>
                <td>{{ $row->user_id }}</td>
                <td>{{$row->name}}</td>
                <td>{{ $row->address }}</td>
                <td><img src="{{ asset($row->photo) }}" width="100" height="100" class="img img-responsive" /></td>


                <td>
                   <a href="{{ route('pre_order.confirm', ['id'=>$row->id]) }}" class="btn btn-warning">Confirm</a>  {{-- --}}
                  <a href="{{ route('pre_order.delete', ['id'=>$row->id]) }}" class="btn btn-danger">Delete</a>  {{-- {{ route('category.delete', $row->id) }} --}}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection