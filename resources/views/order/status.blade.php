@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Order Created</h1>

    <div class="mt-4">
        <strong>Payment Status :</strong> ${{ $status }}
    </div>

    <div class="mt-4">
        <strong>Description:</strong>
        <p>{{ $product->description }}</p>
    </div>

</div>

<div class="container">
    <h1>{{ $product->name }}</h1>

    <div class="mt-4">
        <strong>Price:</strong> ${{ $product->price }}
    </div>

    <div class="mt-4">
        <strong>Description:</strong>
        <p>{{ $product->description }}</p>
    </div>

</div>

<div class="container">
    <h1>{{ $user->name }}</h1>

    <div class="mt-4">
        <strong>Email:</strong> {{ $user->email }}
    </div>

    <div class="mt-4">
        <strong>Verified:</strong>
        <p>{{ $user->email_verified_at ?? 'Not Verified' }}</p>
    </div>

</div>

@endsection