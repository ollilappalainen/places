<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlacesController extends Controller
{
    //
    public function getAllPlaces() {
        return Place::all();
    }

    public function getPlace(Place $place) {
        return $place;
    }

    public function addPlace(Request $request) {        
        $place = Place::create($request->all());

        return response() -> json($place, 201);
    }

    public function updatePlace(Request $request, Place $place) {        
        $place->update($request->all());

        return response()->json($place, 200);
    }

    public function deletePlace(Place $place) {        
        $place->delete();

        return response() -> json(null, 204);
    }
}
