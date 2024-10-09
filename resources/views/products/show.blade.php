<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>

    <div class="mt-4">
        <strong>Price:</strong> ${{ $product->price }}
    </div>

    <div class="mt-4">
        <strong>Description:</strong>
        <p>{{ $product->description }}</p>
        <p><button class="btn btn-secondary"> Buy </button></p>

        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-4">Back to Products</a>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning mt-4">Edit</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-4">Delete</button>
        </form>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-4">Back to Products</a>
</div>
@endsection