@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                placeholder="Enter Product Name">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ $product->price }}" class="form-control"
                placeholder="Enter Product Price">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"
                placeholder="Enter Product Description">{{ $product->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection