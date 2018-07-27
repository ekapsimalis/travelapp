<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index(){
        return view('country.countries');
    }

    public function show($id){
        // Logic of how to create the dynamic urls
        // Add the url route to routes.web.php
    }
}
