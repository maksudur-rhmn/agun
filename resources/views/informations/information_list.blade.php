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
        <td>
          <a href="#" class="btn-sm btn-primary">EDIT</a>
          <a href="#" class="btn-sm btn-danger">DELETE</a>
        </td>
      </tr>

      @empty
      <h1>No Data</h1>
    @endforelse
    </tbody>
  </table>

  {{ $lists->links() }}





    </div>
  </div>
</div>



@endsection
