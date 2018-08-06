<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Country;
use App\Place;
use App\Feedback;
use Session;

class AdminController extends Controller
{
    public function admin(){

        $allfeedbacks = Feedback::all();
        $feedbacks = Feedback::orderby('id', 'desc')->paginate(10);

        // Return the average rating

        $_count = count($allfeedbacks);
        $sum = 0;
        foreach ($allfeedbacks as $feedback){
            $sum+= $feedback->rating;
        }
        $score = $sum/$_count;

        return view('admin')->with('feedbacks', $feedbacks)->with('score', $score);
    }

    public function createCountry(){
        return view('admin.createCountry');
    }

    public function postCreateCountry(Request $request){

        $country = new Country();

        $country->name = $request['name'];
        $country->image = $request['image'];
        $country->continent = $request['continent'];
        $country->population = $request['population'];
        $country->description = $request['description'];
        $country->lat = $request['lat'];
        $country->lng = $request['lng'];

        $country->save();
        Session::flash('countrycreated', 'You have successfully created a country');
        return redirect()->back();

    }

    public function createPlace(){

        $countries = Country::all();

        return view('admin.createPlace')->with('countries', $countries);
    }

    public function postCreatePlace(Request $request){

        $place = new Place();

        $place->name = $request['name'];
        $place->information = $request['information'];
        $place->country_id = $request['country_id'];
        $place->image = $request['image'];

        $place->save();
        Session::flash('placecreated', 'You have successfully created a place');
        return redirect()->back();

    }

    public function users(){

        $users = User::orderby('id', 'desc')->paginate(20);

        return view('admin.users')->with('users', $users);

    }

    public function deleteUser($id){

        $user = User::find($id);
        $user->delete();

        Session::flash('deleteUser', 'User has been deleted');
        return redirect()->back();

    }

    public function promoteUser($id){

        $user = User::find($id);
        $user->type = 'admin';
        $user->save();

        return redirect()->back();
    }
}
