<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Movie extends Model
{



    public static function randomMovie($value ,$num)
    {
      return   collect($value)
            ->random($num);
    }
//
    public static  function path($movie)
    {
        return route('movies.show',$movie['id']);
    }




}
