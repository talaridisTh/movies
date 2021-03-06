<?php

namespace App\repositories;

use App\Movie;
use Illuminate\Support\Facades\Http;

class MoviesRepository {

    public function getVideo($id)
    {
        $video = HTTP::withToken(config("services.tmdb.token"))
            ->get("https://api.themoviedb.org/3/movie/$id?&append_to_response=videos")
            ->json();

        return "https://www.youtube.com/watch?v=" . $video["videos"]["results"][0]["key"];
    }

    public function getImdb($id)
    {
        $imdb = HTTP::withToken(config("services.tmdb.token"))
            ->get("https://api.themoviedb.org/3/movie/$id")
            ->json();

        return "https://www.imdb.com/title/" . $imdb["imdb_id"];
    }

    public function getImdbActor($id)
    {

        $imdb = HTTP::withToken(config("services.tmdb.token"))
            ->get("https://api.themoviedb.org/3/person/$id")
            ->json();

        return "https://www.imdb.com/name/" . $imdb["imdb_id"];
    }

    public function getActorMovies($id)
    {

        $movie = HTTP::withToken(config("services.tmdb.token"))
            ->get("https://api.themoviedb.org/3/person/$id/movie_credits")
            ->json();


        return  $movie['cast']  ;


    }
    public function getActorSocial($id)
    {

       return  HTTP::withToken(config("services.tmdb.token"))
            ->get("https://api.themoviedb.org/3/person/$id/external_ids")
            ->json();



    }

    public function showByiD($value, $id)
    {
        return HTTP::withToken(config("services.tmdb.token"))
            ->get("https://api.themoviedb.org/3/$value/$id?&append_to_response=videos,images,casts")
            ->json();
    }

    public function showMovie($value, $num, $page = 1)
    {
        return Movie::randomMovie(HTTP::withToken(config("services.tmdb.token"))
            ->get("https://api.themoviedb.org/3/movie/$value?page=$page")
            ->json()["results"], $num);
    }

    public function showSimilarMovie($value, $num, $page = 1)
    {
        return Movie::randomMovie(HTTP::withToken(config("services.tmdb.token"))
            ->get("https://api.themoviedb.org/3/movie/$value/similar?page=$page")
            ->json()["results"], $num);
    }

    public function genreMovie()
    {
        $genres = HTTP::withToken(config("services.tmdb.token"))
            ->get("https://api.themoviedb.org/3/genre/movie/list")
            ->json()["genres"];
        $genre = collect($genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        return $genre;
    }

}
