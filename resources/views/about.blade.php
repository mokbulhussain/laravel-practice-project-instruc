@extends('master')

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

    @endswitch
@endsection
