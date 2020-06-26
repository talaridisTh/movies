<?php

namespace App\Http\Controllers;

use App\Movie;
use App\repositories\MoviesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller {

    protected $movieRepository;

    public function __construct(MoviesRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function index()
    {
        $movePopular = $this->movieRepository->showMovie('now_playing', 1, 1);
        $moveTop = $this->movieRepository->showMovie('popular', 1, 1);
        $moveRecent = $this->movieRepository->showMovie('top_rated', 1, 1);
        $latestMovie = $this->movieRepository->showMovie("now_playing", 4, 1);
        $popularMovies = $this->movieRepository->showMovie("popular", 4, 1);
        $topRateMovie = $this->movieRepository->showMovie("top_rated", 4, 2);
        $upComingMovie = $this->movieRepository->showMovie("upcoming", 10, 1);
        $genreMovies = $this->movieRepository->genreMovie();

        return view('home', compact("genreMovies", "topRateMovie", "popularMovies", "latestMovie", "movePopular", "upComingMovie", "moveTop", "moveRecent"));
    }

    public function show($id)
    {
        $similar = $this->movieRepository->showSimilarMovie($id,3);
        $movie = $this->movieRepository->showByiD($id);
        $genreMovies = $this->movieRepository->genreMovie();


        return view("show", compact("movie", "genreMovies","similar"));
    }

    public function showVideo($id)
    {

        return redirect($video = $this->movieRepository->getVideo($id));
    }

}
