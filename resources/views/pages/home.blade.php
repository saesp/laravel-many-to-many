@extends('layouts.main')


@section('content')
    <h2>Products</h2>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{route('product.show', $product)}}">{{$product->name}}</a> [{{$product->code}}]
            </li>
        @endforeach
    </ul>

@endsection