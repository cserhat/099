@extends('equipes.layout')
@section('content')
<div class="container">
<div class="row">
<h2>Coupe du monde</h2>
  <p>Qatar 2022 Tous les equipes:</p>    
<form action="{{ url('equipes') }}" method="POST">
    {!! csrf_field() !!}
<div class="form-group">
<label for="exampleInputEmail1">Pays</label>
<input type="text" name="pays" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pays">
<small id="emailHelp" class="form-text text-muted">Le nom de Pays</small>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Drapeau</label>
<input type="text" name="drapeau" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Drapeau (le format devreait être comme indique 'flags/4x3/nl.svg' ">
<small id="emailHelp" class="form-text text-muted">Drapeau</small>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Groupe</label>
<select name="groupe_id" class="form-control form-control">
@foreach($groupes as $groupe)
  <option value="{{ $groupe->id }}">{{ $groupe->groupe }}</option>
@endforeach
</select>
<small id="emailHelp" class="form-text text-muted">Groupe</small>
</div>
<button type="submit" class="btn btn-success">Ajouter</button>
</form>
</div>
</div>

@stop