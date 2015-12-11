@extends("layouts.master")
@section("content")
    @foreach($breweries as $brewery)
        <div>
            <h1>{{ $brewery->brewery_name }} by {{ $brewery->brewery_name }}</h1>
            <br>
            {{ $brewery->description }}
            <br>
            <img src='{{ $brewery->brewery_label }}' width='500px'>
            <br>
        </div>
    @endforeach
@stop