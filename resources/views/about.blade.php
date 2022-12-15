@extends('master')

@section('title','About-page')

@section('content')
    <h1>{{$page}}</h1>
    <h2>{{$title}}</h2>

    @if($count<=10)
        <p>please store the product</p>
    @else
        <p>Product Avalabile</p>
    @endif

    @switch($color)
        @case('blue')
        <p>Color is blue</p>
        @break

        @case('red')
        <p>color is red</p>
        @break
        @default
        <p>color is not abbaliable</p>

        @foreach($products as $key=>$product)
            <ul>
                <li>
                    {{$key}}
                    {{$product['name']}}
                    {{$product['color']}}
                    {{$product['price']}}
                </li>
            </ul>
        @endforeach


        @forelse($products as $key=>$product)
            <ul>
                <li>
                    {{$key}}
                    {{$product['name']}}
                    {{$product['color']}}
                    {{$product['price']}}
                </li>
            </ul>
        @empty
            <p>not product</p>
        @endforelse

    @endswitch
@endsection
