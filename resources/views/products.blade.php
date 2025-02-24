@extends('layouts.master')
@section('title', 'Products')
@section('content')
<div class="card">
    <div class="card-header">Product Catalog</div>
    <div class="card-body">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['description'] }}</p>
                        <p class="card-text"><strong>{{ $product['price'] }}</strong></p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
