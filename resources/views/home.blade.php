@extends('layout')

@section('content')
  <h1>My Todos</h1>

  <a href="/create">Create Todo</a>

  @if(session('success'))
     <p>{{ session('success') }}</p>
  @endif


  <ul>
    @foreach($todos as $todo)
      <li><a href="#">{{ $todo->title }}</a></li>
    @endforeach
  </ul>

@stop