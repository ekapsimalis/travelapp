<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Country;
use App\User;
use App\Comment;
use Session;

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

            if (Auth::guest()){
                return view('country.show')->with('country', $country)->with('places', $places);
            }

            $user = Auth::user();
            $lcountries = $user->countries()->get();
            /*
                Creating the logic to see if the current user
                has already liked the specific country
            */
            $hadLiked = FALSE;
            foreach($lcountries as $lcountry){
                if($lcountry->id === $country->id){
                    $hadLiked = TRUE;
                    break;
                }
            }

            // Showing the total comments made by this country desc order

            $comments = Country::find($id)->comments()->orderby('id', 'desc')->get();

            return view('country.show')->with('country', $country)->with('places', $places)->with('liked', $hadLiked)->with('comments', $comments);
        }

        return view('country.notfound');
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

    public function unlike($id){

        if (!Auth::guest()){
            $country = Country::find($id);
            $user = Auth::user();

            $user->countries()->detach($country);
            return redirect()->back();
        }

        return "Unauthorized Page";
    }

    public function postComment(Request $request, $id){
        $user = Auth::user();
        
        $this->validate($request, [
          'title' => 'required|max:191',
          'body' => 'required'
        ]);

        $comment = new Comment();

        $comment->title = $request['title'];
        $comment->body = $request['body'];
        $comment->user_id = $user->id;
        $comment->country_id = $id;

        $comment->save();
        Session::flash('comment', 'Comment Posted!');
        return redirect()->back();
    }
}
