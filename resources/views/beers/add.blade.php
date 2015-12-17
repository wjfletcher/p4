@extends("layouts.master")

@section ("content")
    <div class="panel panel-default">
        <div class="panel-body">
    <form method="POST" action="/beers/add">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        
        
        
        <label>Beer Name</label>
        <input type="text" id="name" name="name" value="{{ old("name", "Number 9") }}">
        <br>
        <label>Brewery</label>
        <input type="text" id="brewery" name="brewery" value="{{ old("brewery", "Magic Hat") }}">
        <br>       
        <label>Beer Type</label>
        <input type="text" id="type" name="type" value="{{ old("type", "Ale") }}">
        <br>
        <label>What did you think of it?</label>
        <textarea id="description" name="description">{{ old("description", "nice and tasty") }}</textarea>
        <br>
        <label>Rating</label>
        <input type="number" id="rating" name="rating" value="{{ old("rating", "8") }}">
        <br>
        <label>Beer label (url)</label>
        <input type="text" id="label" name="label" value="{{ old("label", "http://www.magichat.net/images/elixirs/logos/numbernine-logo.png") }}">
        <br>
        <button type="submit">Add beer!</button>
    </form>
</div>
</div>
@stop