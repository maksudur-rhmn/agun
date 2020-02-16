@extends('layouts/app')

@section('content')

   <div class="container">
     <div class="row">
       <div class="col-md-8 offset-md-2">
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
              <td colspan="6">No data available</td>
            </tr>
            @endforelse

          </table>
       </div>
     </div>
   </div>


@endsection
