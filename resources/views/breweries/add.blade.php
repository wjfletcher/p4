@extends("layouts.master")

@section ("content")
    <div class="panel panel-default">
        <div class="panel-body">
            
    <form method="POST" action="/breweries/add">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        
        <label>Brewery Name</label>
        <input type="text" id="brewery" name="brewery" value="{{ old("brewery", "Magic Hat") }}">
        <br>
        
        <label>Location</label>
        <input type="text" id="location" name="location" value="{{ old("location", "Burlington, VT") }}">
        <br> 
        
        <label>What did you think of it?</label>
        <textarea id="description" name="description">{{ old("description",  "Very quirky brewery. There\'s a guided tour or you can go on a self guided tour. A video presentation gives most of the details about the process, and you get to wonder around and see the... unique artwork. You then get to try four beers at the bar.") }}</textarea>
        <br>
        
        <label>Rating</label>
        <input type="number" id="rating" name="rating" value="{{ old("rating", "9") }}">
        <br>
        
        <label>Picture of brewery (url)</label>
        <input type="text" id="image" name="image" value="{{ old("image", "http://img2.10bestmedia.com/Images/Photos/296764/IMG-5214_54_990x660.jpg") }}">
        <br>
        <button type="submit">Add brewery!</button>
    </form>
        
    
</div>
</div>
@stop