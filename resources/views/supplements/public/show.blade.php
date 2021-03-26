@extends('supplements.mainLayout')
@section('main-content')

    <div class="product-container">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="{{$supplement->img_url}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><span class="init">Name:</span> {{$supplement->name}}</h5>
            <p class="card-text"><span class="init">Brand:</span> {{$supplement->brand}}</p>
            <p class="card-text"><span class="init">Ingredients:</span> {{$supplement->ingredients}}</p>
            <p class="card-text"><span class="init">Quantity:</span> {{$supplement->quantity}}gr</p>
            <p class="card-text"><span class="init">Description:</span> {{$supplement->description}}</p>
            <p class="card-text"><span class="init">Use:</span> {{$supplement->use}}</p>
            <p class="card-text"><span class="init">Price:</span> {{$supplement->price}}</p>
            <a href="/supplements" class="btn btn-primary">All supplements</a>
            </div>
        </div>
    </div>

@endsection
