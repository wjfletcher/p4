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
    public function getIndex()
    {
        echo "beer home";
    }

    
    public function getAdd()
    {
        echo "add beer";
    }

    
    public function postAdd()
    {
        //
    }

    
    public function getEdit()
    {
        //
    }

    
    public function postEdit()
    {
        //
    }

    
    public function postDelete()
    {
        //
    }

    
}
