<?php

use Illuminate\Http\Request;

Use App\Place;

//endpoints for places
Route::get('places', 'PlacesController@getAllPlaces');
Route::get('places/{place}', 'PlacesController@getPlace');
Route::post('places', 'PlacesController@addPlace');
Route::put('places/{place}', 'PlacesController@updatePlace');
Route::delete('places/{place}', 'PlacesController@deletePlace');

//endpoints for keywords
Route::get('keywords','PlacesKeywordsController@getAllKeywords');
Route::get('keywords/{keyword}','PlacesKeywordsController@getKeyword');
Route::post('keywords','PlacesKeywordsController@addKeyword');
Route::put('keywords/{keyword}','PlacesKeywordsController@updateKeyword');
Route::delete('keywords/{keyword}','PlacesKeywordsController@deleteKeyword');

Route::get('placeswithkeywords','PlacesWithKeywordsController@getAllPlacesWithKeywords');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
