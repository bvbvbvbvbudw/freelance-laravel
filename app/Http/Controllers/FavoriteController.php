<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    //
    public function addFavorite(Request $request)
    {
        $this->validate($request, [
            'job_id' => ['required', 'integer'],
        ]);
        $user = Auth::user();

        $favorite = new Favorite;
        $favorite -> job_id = $request -> input('job_id');

        $user -> Favorites()->save($favorite);

        return redirect('/job/'.$request->input('job_id'))->with('success', 'Favourite Added!');
    }
    public function getFavouritesWidget()
    {
        $user = Auth::user();

        if(!is_null($user)){
            if($user->hasRole('Freelancer')){
                $favourites = array();
                $favourites = $user->Favorites();
            } else {
                $favourites = false;
            }
        } else {
            $favourites = false;
        }

        return $favourites;
    }
}
