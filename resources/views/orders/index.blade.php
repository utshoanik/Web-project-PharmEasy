@php
    use Illuminate\Support\Facades\DB;
@endphp

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
              <th>Product id</th>
              <th>Product name</th>
              <th>User id</th>
              <th>Status</th>
              <th>Payment Method</th>
              <th>Address</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($category as $row)
            
            @php($result = DB::select('SELECT * FROM products where id=?',[$row->product_id]))
              <tr>
               
                <th>{{ $no++ }}</th>
                <td>{{ $row->product_id }}</td>
                <td>{{$result[0]->name}}</td>
                <td>{{ $row->user_id }}</td>
                <td>{{ $row->status }}</td>
                <td>{{ $row->payment_method }}</td>
                <td>{{ $row->address }}</td>

                <td>
                   <a href="{{ route('order.confirm', ['id'=>$row->id,'name'=>$result[0]->name]) }}" class="btn btn-warning">Confirm</a>  {{-- --}}
                  <a href="{{ route('order.delete', ['id'=>$row->id,'name'=>$result[0]->name]) }}" class="btn btn-danger">Delete</a>  {{-- {{ route('category.delete', $row->id) }} --}}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection