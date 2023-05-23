@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Lista Comics</h1>
            @foreach($products as $product)
            <div class="card">
                <img class="card-img-top" src="{{$product['thumb']}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$product['title']}}</h4>
                    <p class="card-text">{{$product['description']}}</p>
                </div>
            </div>
            @endforeach
    </div>
</div>

@endsection