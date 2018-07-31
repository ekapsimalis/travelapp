<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Country;

class CountriesController extends Controller
{
    public function index(){
        $countries = DB::table('countries')->paginate(3);
        return view('country.countries')->with('countries', $countries);
    }

    public function show($id){

        $country = Country::find($id);
        return view('country.show')->with('country', $country);
    }

    public function byContinents($continent){
        $countries = DB::table('countries')->where('continent', $continent)->get();
        return view('country.byContinent')->with('countries', $countries);
    }
}
