@extends('master')

@section('content')
    <h1>Service Page</h1>
    @for($index=0;$index<count($service);$index++)
        {{$service[$index]}}
        <br/>
    @endfor
@endsection
