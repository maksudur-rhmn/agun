@extends('layouts.app');

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-6 offset-md-3">
       <form action="{{ route('information_update') }}" method="post">
         @csrf
         <div class="form-group">
           <input type="hidden" name="user_id" value="{{ $indiv->id }}">
           <label for="name">Full Name</label>
           <input value="{{ $indiv->name }}" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
         </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input value="{{ $indiv->email }}" type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="project">Project Name</label>
        <input value="{{ $indiv->project }}" name="project" type="text" class="form-control" id="project" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="git">Github Link</label>
        <input value="{{ $indiv->git }}" name="git" type="text" class="form-control" id="git" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
     </div>
   </div>
 </div>





@endsection
