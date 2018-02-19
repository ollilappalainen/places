<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\places_keywords;

class PlacesKeywordsController extends Controller
{
    public function getAllKeywords() {
        return places_keywords::all();
    }

    public function getKeyword(places_keywords $keyword) {
        return $keyword;
    }

    public function addKeyword(Request $request) {        
        $keyword = places_keywords::create($request->all());

        return response() -> json($keyword, 201);
    }

    public function updateKeyword(Request $request, places_keywords $keyword) {        
        $keyword->update($request->all());

        return response()->json($keyword, 200);
    }

    public function deleteKeyword(places_keywords $keyword) {        
        $keyword->delete();

        return response() -> json(null, 204);
    }
}
