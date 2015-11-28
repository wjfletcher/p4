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
    public function getIndex()
    {
       echo "index"; 
    }

    
    public function getAdd()
    {
        echo "add a brewery here";
    }

    
    public function postAdd()
    {
        echo "post the added brewery";
    }

    
    public function getEdit()
    {
        echo "edit existing brewery";
    }

    
    public function postEdit()
    {
        echo "post existing brewery edit";
    }

    
    public function postDelete()
    {
        echo "delete a brewery";
    }

    
}