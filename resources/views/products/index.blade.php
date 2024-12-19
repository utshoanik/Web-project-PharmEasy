
@extends('layouts.app')
 
@section('title', 'Data product')
 
@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data product</h6>
    </div>
    <div class="card-body">
            {{-- @if (auth()->user()->is_admin == 1) --}}
      <a href="{{ route('products.add') }}" class="btn btn-primary mb-3">Add product</a>
            {{-- @endif --}}
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>product_name</th>
              <th>product_price</th>
              <th>Category</th>
              <th>Description</th>
              <th>Gallary</th>
                            {{-- @if (auth()->user()->is_admin == 1) --}}
              <th>Action</th>
                            {{-- @endif --}}
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($data as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->price }}</td>
                <td>{{ $row->category }}</td>
                <td>{{ $row->description }}</td>
                <td><img src="{{ $row->gallery }}" alt="" style="height: 80px;width:80px;"></td>
                
                                {{-- @if (auth()->user()->is_admin == 1) --}}
                <td>
                  <a href="{{ route('products.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('products.delete', $row->id) }}" class="btn btn-danger">Delete</a>
                </td>
                                {{-- @endif --}}
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection