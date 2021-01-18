@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container p-3 my-3 border" style="display: flex; flex-wrap: wrap; flex-grow: 1">
        @foreach ($products as $product)
            @if ($product->product_stocks > 0)
                @include('product_card', ['product' => $product])
            @endif
        @endforeach
    </div>   
@endsection