@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-11">

      <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Project</th>
        <th scope="col">Git</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @forelse($lists as $list)

      <tr>
        <th scope="row">{{ $list->id }}</th>
        <td>{{ $list->name }}</td>
        <td>{{ $list->email }}</td>
        <td>{{ $list->project }}</td>
        <td>{{ $list->git }}</td>
        <td>{{ $list->created_at->diffForHumans()}}</td>
        <td>{{ $list->updated_at}}</td>
        <td>
          <a href="{{url('information/list')}}/{{$list->id}}" class="btn-sm btn-primary">EDIT</a>
          <a href="{{url('information/delete')}}/{{$list->id}}" class="btn-sm btn-danger">DELETE</a>
        </td>
      </tr>

      @empty
      <tr>
        <td>No data available</td>
      </tr>
    @endforelse
    </tbody>
  </table>


{{$lists->links()}}





    </div>
  </div>
</div>



@endsection
