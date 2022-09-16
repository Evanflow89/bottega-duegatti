@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Lista Prodotti</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{route('admin.products.create')}}" class="btn btn-success">Inserisci un nuovo prodotto</a>
            </div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Materiale</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Disponibile</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->material}}</td>
                        <td class="text-truncate">{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            @if ($product->available)
                            <span class="badge badge-pill badge-success">Disponibile</span>
                           
                            @else
                            <span class="badge badge-pill badge-danger">Terminato</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin.products.show', $product->id)}}" class="btn btn-primary">Visualizza</a>
                            <a href="{{route('admin.products.edit', $product->id)}}" class="btn btn-warning">Modifica</a>
                         <form action="{{route('admin.products.destroy', $product->id)}}" method="POST">
                        @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
                        </td>
                    </tr>
                    @endforeach
                 
         
                
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection