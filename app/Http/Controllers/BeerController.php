<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;

use p4\Http\Requests;
use p4\Http\Controllers\Controller;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        
        $beers = \p4\Beer::where("user_id","=",\Auth::id())->orderBy("id","DESC")->get();
        
        return view("beers.index")->with("beers", $beers);
    }

    
    public function getAdd()
    {
        return view("beers.add");
    }

    
    public function postAdd(Request $request)
    {
        $this->validate($request, [
    'name' => 'required|string|max:25',
    'brewery' => 'required|string|max:25',
    'type' => 'required|string|max:25',
    'description' => 'required|string|max:255',
    'label' => 'required',
    
]);
        
        $beer = new \p4\Beer;
        
        $beer->user_id = \Auth::id();
        $beer->beer_name = $request->name;
        $beer->brewery_name = $request->brewery;
        $beer->beer_type = $request->type;
        $beer->description = $request->description;
        $beer->rating = $request->rating;
        $beer->beer_label = $request->label;
        
        $beer->save();
        
        \Session::flash("flash_message","Your beer was added!");
        return redirect("/beers/");
    }

    
    public function getEdit($id = null) {
        
        $beer = \p4\Beer::find($id);
        if(is_null($beer)) {
            \Session::flash("flash_message","Couldn't find that beer.");
            return redirect("/beers");
        }
        
        return view("beers.edit")
            ->with(["beer" => $beer]);
    }

    
    public function postEdit(Request $request){
        
        $this->validate($request, [
    'name' => 'required|string|max:25',
    'brewery' => 'required|string|max:25',
    'type' => 'required|string|max:25',
    'description' => 'required|string|max:255',
    'label' => 'required',
    
]);
        
        $beer = \p4\Beer::find($request->id);
        $beer->beer_name = $request->name;
        $beer->brewery_name = $request->brewery;
        $beer->beer_type = $request->type;
        $beer->description = $request->description;
        $beer->rating = $request->rating;
        $beer->beer_label = $request->label;
        
        $beer->save();
        
        return redirect("/beers");
        
    }

    
    public function getDelete($beer_id){
        $beer = \p4\Beer::find($beer_id);
        
        $beer->delete();
        
        return redirect("/beers");
    }

    
}