@extends('equipes.layout')
@section('content')
<div class="container">
<div class="row">
<h2>Coupe du monde</h2>
  <p>Qatar 2022 Tous les equipes:</p>    

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Equipes Nationalles</th>
        <th>Logo</th>
        <th>Groupe</th>
      </tr>
    </thead>
    <tbody>
    @foreach($equipes as $groupe)
      <tr>
        <td>{{ $groupe->pays }}</td>
        <td>
        <div class="text-center">
          <img  class="rounded" style="height:30px" src="{{ $groupe->drapeau }}" alt="">
        </div>
        </td>
        <td>{{ $groupe->groupe_id }}</td>
      </tr>
@endforeach
</tr>
    </tbody>
  </table>
</div>
@endsection