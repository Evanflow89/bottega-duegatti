@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$product->name}}</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{route('admin.products.index')}}" class="btn btn-primary">Torna ai prodotti</a>
            </div>
            {{$product->description}}
        </div>
    </div>
</div>
@endsection