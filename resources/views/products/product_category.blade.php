@extends('layouts/app')


@section('content')


  <div class="container">
   <div class="row">
     <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h1>Add Product Categories</h1>
          </div>
          <div class="card-body">
            <form class="form-group" action="{{ route('add_category') }}" method="post">
              @csrf
              <div class="py-3">
                <label for="product_category">Enter Your Product Category</label>
                <input class="form-control" type="text" name="product_category" placeholder="Enter Product" id="product_category">
              </div>

              <div class="py-3">
                 <button type="submit" name="button" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
     </div>
     <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h1>View Product Categories</h1>
          </div>
          <div class="card-body">
             <table class="table table-bordered table-striped">
                <tr>
                  <th>SL</th>
                  <th>Category</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Action</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                  <td>{{ $loop-> index +1 }}</td>
                  <td>{{ $category-> product_category }}</td>
                  <td>{{ $category-> created_at->diffForHumans() }}</td>
                  <td>{{ $category-> updated_at->diffForHumans() }}</td>
                  <td>
                    <a href="{{ url('/product/categorydelete') }}/{{$category->id}}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
             </table>
          </div>
        </div>
     </div>
   </div>
  </div>


@endsection
