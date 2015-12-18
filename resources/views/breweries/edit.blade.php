@extends("layouts.master")

@section ("content")
<div class="panel panel-default">
    <div class="panel-body">
    <form method="POST" action="/breweries/edit">
        
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        
        <input type="hidden" name="id" value="{{ $brewery -> id }}">
        
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Brewery Name</span>
        <input type="text" class="form-control" id="brewery" name="brewery" value="{{ $brewery -> brewery_name }}">
        </div>
        <br>
            <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Location</span>
        <input type="text" class="form-control" id="location" name="location" value="{{ $brewery -> location }}">
        </div>
        <br>       
        
                <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">What did you think of it?</span>
        <textarea id="description" class="form-control" name="description">{{ $brewery -> description }}</textarea>
        </div>
        <br>
        
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Rating</span>
        <div class="rating-box form-control"><input id="input-id" type="number" class="rating" name="rating" value="{{ $brewery->rating }}" min=0 max=10 step=1 data-show-caption="false" data-size="xs" ></div>
        </div>
        <br>
        
                    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Picture of brewery</span>
        <input type="text" id="image" class="form-control" name="image" value="{{ $brewery -> brewery_image }}">
        </div>
        <br>
        <button class="btn btn-success" type="submit">Save edit</button>
    </form>
    </div>
</div>


@stop