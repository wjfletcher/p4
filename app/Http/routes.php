<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/beers', 'BeerController@getIndex');

Route::get('/beers/add', 'BeerController@getAdd');

Route::post('/beers/add', 'BeerController@postAdd');

Route::get('/beers/edit/{id?}', 'BeerController@getEdit');

Route::post('/beers/edit', 'BeerController@postEdit');

Route::get('/beers/delete/{id?}', 'BeerController@getDelete');



Route::get('/breweries', 'BreweryController@getIndex');

Route::get('/breweries/add', 'BreweryController@getAdd');

Route::post('/breweries/add', 'BreweryController@postAdd');

Route::get('/breweries/edit/{id?}', 'BreweryController@getEdit');

Route::post('/breweries/edit', 'BreweryController@postEdit');




# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');

# Process login form
Route::post('/login', 'Auth\AuthController@postLogin');

# Process logout
Route::get('/logout', 'Auth\AuthController@getLogout');

# Show registration form
Route::get('/register', 'Auth\AuthController@getRegister');

# Process registration form
Route::post('/register', 'Auth\AuthController@postRegister');




//testing routes

Route::get('/test', function () {
    echo "Hi!";
});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
