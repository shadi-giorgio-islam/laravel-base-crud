@extends('layouts.app')
@section('title', 'Home')
@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <div class="container p-5">
    <form method="post" action="{{route('cars.store')}}">
      @method('POST')
      @csrf
      <div class="form-group">
        <label for="inputModello">Modello</label>
        <input type="text" class="form-control" name="modello" id="inputModello" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Mi raccomando inserisci il modello corretto</small>
      </div>
      <div class="form-group">
        <label for="inputMarca">Marca</label>
        <input type="text" class="form-control" name="marca" id="inputMarca">
      </div>
      <div class="form-group">
        <label for="inputColore">Colore</label>
        <input type="text" class="form-control" name="colore" id="inputColore">
      </div>
      <div class="form-group">
        <label for="inputPrezzo">Prezzo</label>
        <input type="text" class="form-control" name="prezzo" id="inputPrezzo">
      </div>
      <div class="form-group">
        <label for="inputMotore">Motore</label>
        <select class="form-control" name="motore" id="inputMotore">
          <option value="diesel" selected>diesel</option>
          <option value="ibrida">ibrida</option>
          <option value="benzina">benzina</option>
          <option value="benzina">elettrica</option>
        </select>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Consenti uso dati</label>
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>
@endsection
