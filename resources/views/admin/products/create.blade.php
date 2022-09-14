@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Inserisci un nuovo prodotto</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Nome Prodotto</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="material">Materiale</label>
                    <input type="text" class="form-control" id="material" name="material">
                  </div>
                  <div class="form-group">
                    <label for="size">Dimensioni</label>
                    <input type="text" class="form-control" id="size" name="size">
                  </div>
                  <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="10"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="img">Imagine</label>
                    <input type="file" class="form-control-file" id="img" name="img">
                </div>
      
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="available" name="available">
                  <label class="form-check-label" for="available">Disponibile</label>
                </div>
                <button type="submit" class="btn btn-primary">Inserisci</button>
              </form>
        </div>
    </div>
    
</div>

@endsection