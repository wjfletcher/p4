@extends("layouts.master") 
@section("content")


@if(sizeof($beers) == 0)
<div class="panel panel-default">
    <div class="panel-body">
        <h3>Looks like you haven't added any beers. Get drinking!</h3>
    <br>
    <a class="btn btn-primary" href="/beers/add/">
        Add beer
    </a>
</div>
</div>
@else
<div class="panel panel-default">
    <div class="panel-body">
<a class="btn btn-primary" href="/beers/add/">
        Add beer
    </a>
    </div>
</div>
@foreach($beers as $beer)
<div class="panel panel-default">
    <div class="panel-body">
    <div class="row">
    <div class="col-md-6">
    <h1>{{ $beer->beer_name }} by {{ $beer->brewery_name }}</h1>
    <br> {{ $beer->description }}
    <br>
    
        <br> <input id="input-id" type="number" class="rating" name="rating" value="{{ $beer->rating }}" min=0 max=10 data-show-clear="false" data-show-caption="false" disabled="true" step=1 data-size="xs" > {{ $beer->rating/2 }}/5
    <br>
        <br>
        <div class="btn-group">
        <a href="/beers/edit/{{$beer->id}}" class="btn btn-primary">Edit</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
        Delete
    </button>
    </div>
    </div>
    <br>
    <div class="col-md-6">
        <div class="thumbnail"><img src='{{ $beer->beer_label }}'></div>
    </div>
    </div>
    
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <h1>Are you sure you want to delete this beer?</h1>
                
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a style="color:black" href="/beers/delete/{{$beer->id}}">
                        <button type="button" class="btn btn-primary">Confirm delete</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach 
@endif
@stop