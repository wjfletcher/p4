@extends("layouts.master") 
@section("content") 
@if(sizeof($breweries) == 0)
<div class="panel panel-default">
    <div class="panel-body">
        <h3>Looks like you haven't added any breweries. Go check one out and report back!</h3>
    <br>
    <a class="btn btn-primary" href="/breweries/add/">
        Add brewery
    </a>
</div>
</div>
@else
@foreach($breweries as $brewery)
<div class="panel panel-default">
    <div class="panel-body">
    <div class="row">
    <div class="col-md-6">
    <h1>{{ $brewery->brewery_name }}</h1>
    <br> {{ $brewery->description }}
    <br>
    
        <br> 
        <input id="input-id" type="number" class="rating" name="rating" value="{{ $brewery->rating }}" min=0 max=10 data-showclear="false" disabled="true" data-show-clear="false" data-show-caption="false" step=1 data-size="xs" >{{ $brewery->rating/2 }}
    <br>
        <br>
        <div class="btn-group">
        <a href="/breweries/edit/{{$brewery->id}}" class="btn btn-primary">Edit</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
        Delete
    </button>
    </div>
    </div>
    <br>
    <div class="col-md-6">
        <div class="thumbnail"><img src='{{ $brewery->brewery_image }}'></div>
    </div>
    </div>
    
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <h1>Are you sure you want to delete this brewery?</h1>
                
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a style="color:black" href="/breweries/delete/{{$brewery->id}}">
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