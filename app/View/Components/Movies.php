<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Movies extends Component {


    public $movies;
    public $genreMovies;


    public function __construct($movies, $genreMovies  )
    {

        $this->movies = $movies;
        $this->genreMovies = $genreMovies;
//dd();

    }

    public function render()
    {

        return <<<'blade'
 @foreach($movies as $movie)
        <div class="col-md-6 col-lg-3 col-sm-6 d-flex justify-content-center">
                            <div class="movie-card">
                              <div class="hovereffect header-icon-container manOfSteel"
                                     style="background: url('https://image.tmdb.org/t/p/w500/.{{$movie["poster_path"]}}');
                                         background-size:cover;
                                         ">
                                    <div class="manOfSteel"></div>
                                    <div class="overlay d-flex flex-column justify-content-around">
                                        <p>
                                            <a class="font-weight-bold border p-2"  target="_blank" href="{{route('movies.video',$movie['id'])}}">View Trailer</a>
                                        </p>
                                        <p>
                                            <a class="font-weight-bold border p-2" href="{{App\Movie::path($movie)}}">View Details</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="movie-content">
                                    <div class="movie-content-header mt-2">
                                        <a href="{{App\Movie::path($movie)}}">
                                            <h3 class="movie-title">{{$movie["title"]}}</h3>
                                        </a>

                                    </div>
                                    <div class="movie-info">
                                        <div class="info-section d-flex flex-column ">
                                            <x-feature.genre :movie="$movie" :genreMovies="$genreMovies"></x-feature.genre>
                                        </div><!--date,time-->
                                        <div class="info-section ">
                                            <label>Rating</label>
                                            <x-feature.rating :movie="$movie"></x-feature.rating>
                                        </div><!--screen-->
                                    </div>
                                </div><!--movie-content-->
                            </div><!--movie-card-->
                                      </div>
       @endforeach
blade;
    }
}
