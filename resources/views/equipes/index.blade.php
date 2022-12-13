@extends('equipes.layout')
@section('content')
<div class="container">
<div class="row">
<h2>Coupe du monde</h2>
  <p>Qatar 2022 Tous les equipes:</p>
  @if (Route::has('login'))
    @auth
    <a href="{{ url('/equipes/create') }}"> <button type="button" class="btn btn-success">Nouveau Equipes</button></a>
    @else
        Connect to for add new teams
    @endauth
</div>
@endif 
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Equipes Nationalles</th>
        <th>Logo</th>
        <th>Groupe</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>


  @foreach($equipes as $equipe)
      <tr>
        <td>{{ $equipe->pays }}</td>
        <td>
        <div class="text-center">
          <img  class="rounded" style="height:30px" src="{{ $equipe->drapeau }}" alt="">
        </div>
        </td>
        @foreach($groupes as $test)
        @if($test->id == $equipe->groupe_id)
        
        <td><div class="text-center">{{ $test->groupe }} </div></td>
        <td class="md-4">
        <div class="text-center">
        @if (Route::has('login'))
<a href="{{ url('/equipes/'.$equipe->id) }}">  <button type="button" class="btn btn-primary">View</button></a>
    @auth
    
        <a href="{{ url('/equipes/'.$equipe->id.'/edit') }}"> <button type="button" class="btn btn-warning">Edit</button></a>
        <form method="post" action="{{ url('/equipes' .'/' .$equipe->id ) }}">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Delete</button> 
    @else
        Connect to for edit or delete
    @endauth
</div>
@endif
       
        </form>
        <div>
        </td>
        @endif
        @endforeach
      </tr>
@endforeach
</tr>
    </tbody>
  </table>
</div>
@stop