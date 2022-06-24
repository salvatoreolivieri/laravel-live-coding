
@extends('layouts.main')

@section('content')

<h1>questa è la homepage</h1>

<div>
    <ul class="card-container">
        @foreach ( $products as $product )
            <li>{{ $product->nome }} | {{ $product->tipo}}

                <a href="{{ $product->immagine}}" target="_blank">
                    <img src="{{ $product->immagine}}" alt="">
                </a>

            </li>
        @endforeach
    </ul>
</div>

@dump($products)

@endsection
