<?php

use Illuminate\Http\Request;

Use App\Place;

Route::get('places', 'PlacesController@getAllPlaces');
Route::get('places/{place}', 'PlacesController@getPlace');
Route::post('places', 'PlacesController@addPlace');
Route::put('places/{place}', 'PlacesController@updatePlace');
Route::delete('places/{place}', 'PlacesController@deletePlace');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
