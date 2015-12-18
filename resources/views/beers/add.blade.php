@extends("layouts.master") @section ("content")
<div class="panel panel-default">
    <div class="panel-body">
        <h1>Add a beer</h1> @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="POST" action="/beers/add">
            <input type="hidden" value="{{ csrf_token() }}" name="_token">




            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Beer Name</span>
                <input type="text" class="form-control" id="name" name="name" value="{{ old(" name ", "Number 9 ") }}" required>
            </div>
            <br>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Brewery</span>
                <input type="text" class="form-control" id="brewery" name="brewery" value="{{ old(" brewery ", "Magic Hat ") }}" required>
            </div>
            <br>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Beer Type</span>
                <input type="text" class="form-control" id="type" name="type" value="{{ old(" type ", "Ale ") }}">
            </div>
            <br>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">What did you think of it?</span>
                <textarea id="description" class="form-control" name="description">{{ old("description", "nice and tasty") }}</textarea>
            </div>
            <br>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Rating</span>
                <div class="rating-box form-control">
                    <input id="input-id" type="number" class="rating" name="rating" value="{{ old(" rating ", "4 ") }}" min=0 max=10 step=1 data-show-caption="false" data-size="xs">
                </div>
            </div>
            <br>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Beer label (url)</span>
                <input type="text" class="form-control" id="label" name="label" value="{{ old(" label ", "http://www.magichat.net/images/elixirs/logos/numbernine-logo.png ") }}">
            </div>
            <br>
            <button class="btn btn-success" type="submit">Add beer!</button>
        </form>
    </div>
</div>


@stop