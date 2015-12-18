@extends("layouts.master")

@section ("content")
<div class="panel panel-default">
    <div class="panel-body">
        <h1>Edit Beer</h1>
        @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="/beers/edit">
        
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        
        <input type="hidden" name="id" value="{{ $beer -> id }}">
        
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Beer Name</span>
        <input type="text" class="form-control" id="name" name="name" value="{{ $beer -> beer_name }}">
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Brewery</span>
        <input type="text" class="form-control" id="brewery" name="brewery" value="{{ $beer -> brewery_name }}">
        </div>
        <br>       
            <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Beer Type</span>
        <input type="text" class="form-control" id="type" name="type" value="{{ $beer -> beer_type }}">
        </div>
        <br>
                <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">What did you think of it?</span>
        <textarea id="description" class="form-control" name="description">{{ $beer -> description }}</textarea>
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Rating</span>
        <div class="rating-box form-control"><input id="input-id" type="number" class="rating" name="rating" value="{{ $beer->rating }}" min=0 max=10 step=1 data-show-caption="false" data-size="xs" ></div>
        </div>
        <br>
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Beer label (url)</span>
        <input type="text" id="label" class="form-control" name="label" value="{{ $beer -> beer_label }}">
        </div>
        <br>
        <button class="btn btn-success" type="submit">Save edit</button>
    </form>
</div>
</div>

@stop