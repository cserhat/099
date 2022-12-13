@extends('equipes.layout')
@section('content')
<div class="container">
   <h1><span class="badge bg-dark">{{ $equipes->pays }}</span></h1> 
   <div class="card" style="width: 70rem;">
  <img src="../{{ $equipes->drapeau }}" class="card-img-top" style="height:500px;"alt="...">
  <div class="card-body">
    <h5 class="card-title">Created at: {{ $equipes->created_at }}</h5>
    <p class="card-text">Updated at: {{ $equipes->updated_at }}</p>
  </div>
</div>
</div>
@stop