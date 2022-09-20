@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h1>{{$product->name}}</h1>
        </div>
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-center">
                <a href="{{route('admin.products.index')}}" class="btn btn-primary">Torna ai prodotti</a>
            </div>
            <div class="row d-flex justify-content-center">
              {{-- ############ SECTION LEFT CARD ################# --}}
              <div class="col-12 col-md-5">
               

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset("storage/{$product->img}")}}" class="d-block w-100" alt="...">
                      </div>
                      @if ($product->img_2)
                      <div class="carousel-item">
                        <img src="{{asset("storage/{$product->img_2}")}}" class="d-block w-100" alt="...">
                      </div>
                      @endif
                     @if ($product->img_3)
                     <div class="carousel-item">
                        <img src="{{asset("storage/{$product->img_3}")}}" class="d-block w-100" alt="...">
                      </div>
                     @endif
                      
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
              </div>
            
       
 {{-- ############ SECTION RIGHT CARD ################# --}}
                <div class="col-12 col-md-5">
                  <div class="description-product">
                    {{$product->description}}
                  </div>
                  <div class="oldPrice-product">
                    {{$product->old_price}}
                  </div>
                  <div class="price-product">
                    {{$product->price}}
                  </div>
                 
                </div>

              </div>
        </div>
    </div>
</div>
@endsection