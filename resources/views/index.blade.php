@extends('layouts.master')

@section ('content')
    <img src='img/beerdrinkerlogo.png'>
    <p>Welcome to BeerDrinker, where you can record all your beer drinking knowledge! Now, whenever you crack open a new beer, you can pop over to BeerDrinker and add it to your list of beers you've tried, including the beer name, a rating, as well as your description of that particular brew. Never again will you walk into a liquor store and wonder if you liked a beer or not!</p>
    <p>But wait, there's more! Like visiting breweries? You can also save the ones you visit to BeerDrinker!</p>

<form class="genbutton" action="/beers">
                <button class="btn btn-info">Beers</button>
            </form>
<form class="genbutton" action="/breweries">
                <button class="btn btn-info">Breweries</button>
            </form>
<form class="genbutton" action="/login">
                <button class="btn btn-info">login</button>
            </form>
<form class="genbutton" action="/breweries">
                <button class="btn btn-info"></button>
            </form>
@stop