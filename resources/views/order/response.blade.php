@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-success">Order Created</h1>

    <div class="mt-4">
        <h2 class="text-primary">Payment Status :{{ $_GET['status'] }}</h2>
    </div>

</div>


@endsection