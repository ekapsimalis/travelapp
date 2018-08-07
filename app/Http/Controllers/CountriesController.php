<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Country;

class CountriesController extends Controller
{
    public function index(){
        $countries = DB::table('countries')->paginate(5);
        return view('country.countries')->with('countries', $countries);
    }

    public function show($id){

        $country = Country::find($id);

        if ($country !== null){
            $places = Country::find($id)->places;
            return view('country.show')->with('country', $country)->with('places', $places);
        }

        return "PAGE NOT FOUND!";
    }

    public function byContinents($continent){
        $countries = DB::table('countries')->where('continent', $continent)->get();
        return view('country.byContinent')->with('countries', $countries);
    }

    public function like($id){
        
        // Check if the user is Authenticated
        // Else we may encounter strange errors

        if (!Auth::guest()){
            $country = Country::find($id);
            $user = Auth::user();

            $user->countries()->attach($country);
            return redirect()->back();
        }

        return "Unauthorized Page";

    }
}
