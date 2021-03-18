@extends('layouts.app')
@section('title', 'Home')
@section('content')
  <div class="container p-5">
        <form>
      <div class="form-group">
        <label for="inputModello">Modello</label>
        <input type="email" class="form-control" id="inputModello" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Mi raccomando inserisci il modello corretto</small>
      </div>
      <div class="form-group">
        <label for="inputMarca">Marca</label>
        <input type="password" class="form-control" id="inputMarca">
      </div>
      <div class="form-group">
        <label for="inputColore">Colore</label>
        <input type="password" class="form-control" id="inputColore">
      </div>
      <div class="form-group">
        <label for="inputPrezzo">Prezzo</label>
        <input type="password" class="form-control" id="inputPrezzo">
      </div>
      <div class="form-group">
        <label for="inputPrezzo">Motore</label>
        <input type="password" class="form-control" id="inputPrezzo">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Consenti uso dati</label>
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>
@endsection
