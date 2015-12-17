@extends("layouts.master") 
@section("content") 

@foreach($breweries as $brewery)
<div class="panel panel-default">
    <div class="panel-body">
    <div class="row">
    <div class="col-md-6">
    <h1>{{ $brewery->brewery_name }}</h1>
    <br> {{ $brewery->description }}
    <br>
    
    <br> {{ $brewery->rating }}
    <br>
        <a style="color:black" href="/breweries/edit/{{$brewery->id}}">Edit</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Delete
    </button>
    </div>
    
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

@stop