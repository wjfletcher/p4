@extends("layouts.master") @section ("content")
<div class="panel panel-default">
    <div class="panel-body">
        <h1>Add a brewery</h1>
        <form method="POST" action="/breweries/add">
            <input type="hidden" value="{{ csrf_token() }}" name="_token">


            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Brewery Name</span>
                <input type="text" class="form-control" id="brewery" name="brewery" value="{{ old(" brewery ", "Magic Hat ") }}" required>
            </div>
            <br>


            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Brewery Name</span>
                <input type="text" class="form-control" id="location" name="location" value="{{ old(" location ", "Burlington, VT ") }}" required>
            </div>
            <br>


            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Brewery Name</span>
                <textarea id="description" class="form-control" name="description" required>{{ old("description", "Very quirky brewery. There\'s a guided tour or you can go on a self guided tour. A video presentation gives most of the details about the process, and you get to wonder around and see the... unique artwork. You then get to try four beers at the bar.") }}</textarea>
            </div>
            <br>


            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Brewery Name</span>
                <div class="rating-box form-control">
                    <input id="input-id" type="number" class="rating" name="rating" value="{{ old(" rating ", "4 ") }}" min=0 max=10 step=1 data-show-caption="false" data-size="xs">
                </div>
            </div>
            <br>


            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Brewery Name</span>
                <input type="text" class="form-control" id="image" name="image" value="{{ old(" image ", "http://img2.10bestmedia.com/Images/Photos/296764/IMG-5214_54_990x660.jpg ") }}" required>
            </div>
            <br>
            <button class="btn btn-success" type="submit">Add brewery!</button>
        </form>


    </div>
</div>
@stop