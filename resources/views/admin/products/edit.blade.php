@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Modifica {{$product->name}}</h1>
        </div>
        <div class="card-body">
            <form action="{{route('admin.products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="name">Nome Prodotto</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $product->name)}}">
                  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                </div>
                <div class="form-group">
                    <label for="material">Materiale</label>
                    <input type="text" class="form-control @error('material') is-invalid @enderror" id="material" name="material" value="{{old('material', $product->material)}}">
                    @error('material')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                 
                  <div class="form-group">
                    <label for="size">Dimensioni</label>
                    <input type="text" class="form-control @error('size') is-invalid @enderror" id="size" name="size" value="{{old('size', $product->size)}}">
                    @error('size')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
 
                  <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="10">{{old('description', $product->description)}}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="price">Prezzo €</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $product->price)}}">
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>

                  <div class="form-group">
                    <label for="img">Immagine</label>
                    <input type="file" class="form-control-file" id="img" name="img" value="{{old('img')}}">
                </div>
      
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="available" name="available" {{old('available', $product->available) ? 'checked' : ''}}>
                  <label class="form-check-label" for="available">Disponibile</label>
                </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
              </form>
        </div>
    </div>
    
</div>

@endsection