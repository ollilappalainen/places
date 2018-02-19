<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //
    protected $fillable = ['title', 'description','geometry_lat','geometry_lng','opening','closing','is_favorite'];
}
