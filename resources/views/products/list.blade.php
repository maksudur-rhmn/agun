@extends('layouts/app')

@section('content')

   <div class="container">

    <div class="head text-center">
      <h1>All Products</h1>
    </div>
     <div class="row">
       <div class="col-md-8 offset-md-2">
         @if(session('success'))
           <div class="alert alert-success">
             {{ session('success') }}
           </div>
         @endif
          <table class="table table-bordered table-striped">
            <tr>
              <th>SL</th>
              <th>Product</th>
              <th>Price</th>
              <th>Category</th>
              <th>Created at</th>
              <th>Updated at</th>
              <th>Action</th>
            </tr>

            @forelse($lists as $list)
              <tr>
                <td>{{$loop->index +1}}</td>
                <td>{{$list->product_name}}</td>
                <td>{{$list->product_price}}</td>
                <td>{{$list->relationBetweenCategory->product_category}}</td>
                <td>{{$list->created_at->diffForHumans()}}</td>
                <td>{{$list->updated_at->diffForHumans()}}</td>
                <td>
                  <a href="{{url('product/list')}}/{{$list->id}}" class="btn btn-success">Edit</a>
                  <a href="{{url('product/delete')}}/{{$list->id}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            @empty
            <tr>
              <td colspan="60">No data available</td>
            </tr>
            @endforelse

          </table>
       </div>
     </div>


             <div class="head text-center">
               <h1>Trashed Products</h1>
             </div>


     <div class="row">
       <div class="col-md-8 offset-md-2">
         @if (session('delete'))
           <div class="alert alert-danger">
             {{ session('delete') }}
           </div>
         @endif
          <table class="table table-bordered table-striped">
            <tr>
              <th>SL</th>
              <th>Product</th>
              <th>Price</th>
              <th>Category</th>
              <th>Created at</th>
              <th>Deleted at</th>
              <th>Action</th>
            </tr>
        @forelse ($trashed_products as $trash_product)
          <tr>
            <td>{{ $loop-> index +1 }}</td>
            <td>{{ $trash_product->product_name }}</td>
            <td>{{ $trash_product->product_price }}</td>
            <td>{{ $trash_product->relationBetweenCategory->product_category }}</td>
            <td>{{ $trash_product->created_at->diffForHumans() }}</td>
            <td>{{ $trash_product->deleted_at->diffForHumans() }}</td>
            <td>
              <a href="{{ url('product/restore') }}/{{ $trash_product->id }}" class="btn btn-warning">Restore</a>
              <a href="{{ url('product/hardDelete') }}/{{ $trash_product->id }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>

        @empty
          <tr>
            <td colspan="60">No data available</td>
          </tr>
        @endforelse


          </table>
       </div>
     </div>
   </div>


@endsection
