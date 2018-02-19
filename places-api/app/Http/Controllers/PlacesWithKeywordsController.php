<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\places_keywords;
use App\Place;

class PlacesWithKeywordsController extends Controller
{
    public function getAllPlacesWithKeywords() {
        $placeWithKeywords = DB::table('places')
                                ->join('places_keywords', 'places.place_id','=','places_keywords.id')
                                ->select('places.*')
                                ->get();
        
        return $placeWithKeywords;
    }

    public function getPlaceWithKeywords(Place $place) {

    }
}
