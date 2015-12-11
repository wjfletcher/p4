@extends("layouts.master")
@section("content")
    @foreach($beers as $beer)
        <div>
            <h1>{{ $beer->beer_name }} by {{ $beer->brewery_name }}</h1>
            <br>
            {{ $beer->description }}
            <br>
            <img src='{{ $beer->beer_label }}' width='500px'>
            <br>
        </div>
    @endforeach
@stop