<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    public function index(){
        return view('country.countries');
    }

    public function show($id){

        $country = Country::find($id);
        return view('country.show')->with('country', $country);
    }
}
