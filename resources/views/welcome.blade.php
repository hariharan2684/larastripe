@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex justify-center">
        <h1>Welcome to larastripe</h1>
    </div>

</div>
@if (Auth::check())
    @php
        $products = App\Models\Product::all();

    @endphp
    <div class="container">
        <div class="flex justify-center">
            <h1 class="text-center">Products</h1>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $product->name }}</h5>
                                <p class="card-text text-center">${{ $product->price }}</p>
                                <p class="card-text text-center"> <a href="{{ route('order', $product->id) }}"
                                        class="btn btn-primary">Buy</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif

@endsection