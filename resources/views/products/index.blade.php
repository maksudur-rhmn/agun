@extends('layouts/app')


@section('content')


  <div class="container">
   <div class="row">
     <div class="col-lg-6 offset-lg-3">
        <form class="form-group" action="{{ route('product_submit') }}" method="post">
          @csrf
          <div class="py-3">
            <label for="product_name">Enter Your Product</label>
            <input class="form-control" type="text" name="product_name" placeholder="Enter Product" id="product_name">
          </div>
          <div class="py-3">
            <label for="product_price">Enter  Product Price</label>
            <input class="form-control" type="text" name="product_price" placeholder="Enter Product Price" id="product_price">
          </div>
          <div class="py-3">
            <label for="product_price">Enter  Product Category</label>
            <select class="form-control" name="product_category" id="product_category">
              @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->product_category }}</option>
              @endforeach
            </select>
          </div>
          <div class="py-3">
             <button type="submit" name="button" class="btn btn-primary">Submit</button>
          </div>
        </form>
     </div>
   </div>
  </div>


@endsection
