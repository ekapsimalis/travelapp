<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Country;

class CountriesController extends Controller
{
    public function index(){
        //$countries = Country::all();
        $countries = DB::table('countries')->paginate(3);
        return view('country.countries')->with('countries', $countries);
    }

    public function show($id){

        $country = Country::find($id);
        return view('country.show')->with('country', $country);
    }
}
