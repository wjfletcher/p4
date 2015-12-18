@extends("layouts.master")

@section ("content")
<div class="panel panel-default">
    <div class="panel-body">
    <form method="POST" action="/breweries/edit">
        
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        
        <input type="hidden" name="id" value="{{ $brewery -> id }}">
        
        <label>Brewery Name</label>
        <input type="text" id="brewery" name="brewery" value="{{ $brewery -> brewery_name }}">
        <br>
        <label>Location</label>
        <input type="text" id="location" name="location" value="{{ $brewery -> location }}">
        <br>       
        <label>What did you think of it?</label>
        <textarea id="description" name="description">{{ $brewery -> description }}</textarea>
        <br>
        <label>Rating</label>
        <input type="number" id="rating" name="rating" value="{{ $brewery -> rating }}">
        <br>
        <label>Picture of brewery (url)</label>
        <input type="text" id="image" name="image" value="{{ $brewery -> brewery_image }}">
        <br>
        <button type="submit">Save edit</button>
    </form>
    </div>
</div>


@stop