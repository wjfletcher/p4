<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;

use p4\Http\Requests;
use p4\Http\Controllers\Controller;

class BreweryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        
        $breweries = \p4\Brewery::where("user_id","=",\Auth::id())->orderBy("id","DESC")->get();
        
        return view("breweries.index")->with("breweries", $breweries);
    }

    
    public function getAdd()
    {
        return view("breweries.add");
    }

    
    public function postAdd(Request $request){
        $this->validate($request, [
    'brewery' => 'required|string|max:25',
    'location' => 'required|string|max:25',
    'description' => 'required|string|max:255',
    'image' => 'required|url',
        ]);
        $brewery = new \p4\Brewery;
        
        $brewery->user_id = \Auth::id();
        $brewery->brewery_name = $request->brewery;
        $brewery->location = $request->location;
        $brewery->description = $request->description;
        $brewery->rating = $request->rating;
        $brewery->brewery_image = $request->image;
        
        $brewery->save();
        
        \Session::flash("flash_message","Your brewery was added!");
        return redirect("/breweries/");
    }

    
    public function getEdit($id = null) {
        
        $brewery = \p4\Brewery::find($id);
        if(is_null($brewery)) {
            \Session::flash("flash_message","Couldn't find that brewery.");
            return redirect("/breweries");
        }
        
        return view("breweries.edit")
            ->with(["brewery" => $brewery]);
    }

    
    public function postEdit(Request $request){
        
        $this->validate($request, [
    'brewery' => 'required|string|max:25',
    'location' => 'required|string|max:25',
    'description' => 'required|string|max:255',
    'image' => 'required|url',
        ]);
        
        $brewery = \p4\Brewery::find($request->id);
        $brewery->brewery_name = $request->brewery;
        $brewery->location = $request->location;
        $brewery->description = $request->description;
        $brewery->rating = $request->rating;
        $brewery->brewery_image = $request->image;
        
        $brewery->save();
        
        return redirect("/breweries");
        
    }

    
    public function getDelete($brewery_id){
        $brewery = \p4\Brewery::find($brewery_id);
        
        $brewery->delete();
        
        return redirect("/breweries");
    }

    
}