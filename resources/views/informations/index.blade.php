@extends('layouts.app');

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-6 offset-md-3">
       <form action="{{ route('information_create') }}" method="post">
         @csrf
         <div class="form-group">
           <label for="name">Full Name</label>
           <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
         </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="project">Project Name</label>
        <input name="project" type="text" class="form-control" id="project" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="git">Github Link</label>
        <input name="git" type="text" class="form-control" id="git" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
     </div>
   </div>
 </div>





@endsection
