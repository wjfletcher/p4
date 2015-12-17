@extends("layouts.master")

@section ("content")
<div class="panel panel-default">
    <div class="panel-body">
    <form method="POST" action="/beers/edit">
        
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        
        <input type="hidden" name="id" value="{{ $beer -> id }}">
        
        <label>Beer Name</label>
        <input type="text" id="name" name="name" value="{{ $beer -> beer_name }}">
        <br>
        <label>Brewery</label>
        <input type="text" id="brewery" name="brewery" value="{{ $beer -> brewery_name }}">
        <br>       
        <label>Beer Type</label>
        <input type="text" id="type" name="type" value="{{ $beer -> beer_type }}">
        <br>
        <label>What did you think of it?</label>
        <textarea id="description" name="description">{{ $beer -> description }}</textarea>
        <br>
        <label>Rating</label>
        <input type="number" id="rating" name="rating" value="{{ $beer -> rating }}">
        <br>
        <label>Beer label (url)</label>
        <input type="text" id="label" name="label" value="{{ $beer -> beer_label }}">
        <br>
        <button type="submit">Save edit</button>
    </form>
</div>
</div>

@stop