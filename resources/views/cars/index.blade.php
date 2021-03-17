@extends('layouts.app')
@section('title', 'Home')
@section('content')
  <h1>Home</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($macchine as $macchina)
      <tr>
        <th>{{$macchina->id}}</th>
        <td>{{$macchina->modello}}</td>
        <td>{{$macchina->marca}}</td>
        <td>{{$macchina->colore}}</td>
        <td>{{$macchina->prezzo}}</td>
        <td>{{$macchina->motore}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
