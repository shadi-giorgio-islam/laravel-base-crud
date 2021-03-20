@extends('layouts.app')
@section('title', 'Macchina selezionata')
@section('content')
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Dettagli</h1>
    <table class="table m-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Modello</th>
          <th scope="col">Marca</th>
          <th scope="col">Colore</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Motore</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <th>{{$macchina->id}}</th>
            <td>{{$macchina->modello}}</td>
            <td>{{$macchina->marca}}</td>
            <td>{{$macchina->colore}}</td>
            <td>{{$macchina->prezzo}} $</td>
            <td>{{$macchina->motore}}</td>
          </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
