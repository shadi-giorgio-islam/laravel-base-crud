@extends('layouts.app')
@section('title', 'Home')
@section('content')
  <div class="container p-5">
    <h1>Cars</h1>
    <a href="{{ route('create')}}">Inserisci auto</a>
    <table class="table">
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
        @foreach ($macchine as $macchina)
          <tr>
            <th>{{$macchina->id}}</th>
            <td>{{$macchina->modello}}</td>
            <td>{{$macchina->marca}}</td>
            <td>{{$macchina->colore}}</td>
            <td>{{$macchina->prezzo}} $</td>
            <td>{{$macchina->motore}}</td>
            <td>
              <a href="{{ route('show', $macchina->id) }}" class="btn btn-info">dettagli</a>
              <a href="{{ route('edit', $macchina->id) }}" class="btn btn-warning">Modifica</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
