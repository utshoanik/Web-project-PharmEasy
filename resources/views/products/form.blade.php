
@extends('layouts.app')
 
@section('title', 'Form products')
 
@section('contents')
<form action="{{ isset($product) ? route('products.update', $product->id) : route('products.save') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($product) ? 'Form Edit product' : 'Form plus product' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name">Product Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ isset($product) ? $product->name : '' }}">
            </div>
            <div class="form-group">
              <label for="price">Product Price</label>
              <input type="number" class="form-control" id="price" name="price" value="{{ isset($product) ? $product->price : '' }}">
            </div>
            <div class="form-group">
              <label for="category">Category product</label>
              <select name="category" id="category" class="custom-select">
                                <option value="" selected disabled hidden>-- Choose Category --</option>
                                @foreach ($category as $row)
                                    <option value="{{ $row->name }}" {{ isset($product) ? ($product->category == $row->id ? 'selected' : '') : '' }}>{{ $row->name }}</option>
                                @endforeach
                            </select>
            </div>
            <div class="form-group">
              <label for="description">description product</label>
              <input type="text" class="form-control" id="description" name="description" value="{{ isset($product) ? $product->description : '' }}">
            </div>
            <div class="form-group">
              <label for="gallery">Image's Url of  product</label>
              <input type="text" class="form-control" id="gallery" name="gallery" value="{{ isset($product) ? $product->gallery : '' }}">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection