@extends('equipes.layout')
@section('content')
<div class="container">
<div class="row">
<h2>Coupe du monde</h2>
  <p>Qatar 2022 Tous les equipes:</p>    
<form action="{{ url('equipes/'.$equipes->id)}}" method="POST">
    {!! csrf_field() !!}
    @method("PATCH")
<div class="form-group">
<label for="exampleInputEmail1">Pays</label>
<input type="text" name="pays" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $equipes->pays }}">
<small id="emailHelp" class="form-text text-muted">Corriger le nom de pays.</small>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Groupe</label>
<select name="groupe_id" class="form-control form-control">
@foreach($groupes as $groupe)
  <option value="{{ $groupe->id }}">{{ $groupe->groupe }}</option>
@endforeach
</select>
<small id="emailHelp" class="form-text text-muted">Corriger le nom de pays.</small>
</div>
<button type="submit" class="btn btn-danger">Back</button>
<button type="submit" class="btn btn-warning">Edit</button>
</form>
</div>
</div>

@endsection