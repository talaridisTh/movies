<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Movie extends Model {

    public static function randomMovie($value, $num)
    {
        return collect($value)
            ->random($num);
    }

//
    public static function path($movie)
    {
        return route('movies.show', $movie['id']);
    }

    public static function pathVideo($video)
    {
        return route('movies.video', $video['id']);
    }

    public static function pathImdb($imdb)
    {

        return route('movies.imdb', $imdb['id']);
    }

    public static function pathImdbActor($actor)
    {

        return route('actor.imdb', $actor['id']);
    }

    public static function actor($actor)
    {
        if (!$actor['deathday'])
        {
            return Carbon::parse($actor['birthday'])->format('d/m/Y')
                . " (" . Carbon::parse($actor['birthday'])->diff(Carbon::now())->format('%y years, %m months and %d days') . ")";
        } else
        {
            $death = (int) $actor['deathday'] - (int) $actor['birthday'];

            return Carbon::parse($actor['birthday'])->format('d/m/Y')
                . " ( Death day : $death - Ages | " . Carbon::parse($actor['deathday'])->format('d/m/Y') . "  )";
        }
    }

}
