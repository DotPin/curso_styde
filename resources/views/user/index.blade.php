@extends('layout')

@section('title',"Usuarios")

@section('content')

    <h1>{{ $titles }}</h1>

    @if (!empty($users))
       <ul>
       @foreach($users as $user)
           <li> {{ $user }} </li> 
       @endforeach
       </ul>
    @else
       <li>No hay usuarios registrados</li>
    @endif

@endsection