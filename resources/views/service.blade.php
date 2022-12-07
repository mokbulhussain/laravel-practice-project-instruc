@extends('master')

@section('content')
    <h1>Service Page</h1>
    @for($index=0;$index<4;$index++)
        {{$service[$index]}}
        <br/>
    @endfor
@endsection
