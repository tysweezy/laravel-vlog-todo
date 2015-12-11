@extends('layout')

@section('content')


 <h3>Create Todo</h3>


  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>  
    </div>
  @endif



  <form action="/create" method="post">
     {!! csrf_field() !!}

     <label for="title">Title</label> <br>
     <input type="text" name="title"> <br>

     <label for="description">Description</label> <br>
     <textarea name="description" id="" cols="30" rows="10"></textarea> <br>

      
    <input type="submit" value="submit">  
  
   </form>

@stop