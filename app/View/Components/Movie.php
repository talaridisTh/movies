<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Movie extends Component {

    public $movie;
    public $genreMovies;

    public function __construct($movie, $genreMovies)
    {
        $this->movie = $movie;
        $this->genreMovies = $genreMovies;
    }

    public function render()
    {
                    return <<<'blade'
            <div class="movie-header manOfSteel"
            style="
            max-width: 300px;
            background-size:cover;
            background: url('https://image.tmdb.org/t/p/w300/.{{$movie["poster_path"]}}') ;">
                    <div class="header-icon-container">
                        <a href="#">
                            <i class="material-icons header-icon"></i>
                        </a>
                    </div>
                </div><!--movie-header-->
                <div class="movie-content">
                    <div class="movie-content-header">
                        <a href="#">
                            <a href="{{ route('movies.show',$movie['id']) }}"><h3 class="movie-title">{{$movie["title"]}}</h3></a>
                        </a>
                        <div class="imax-logo">
                          @include("includes.rating" ,['movie' => $movie])
                        </div>
                    </div>
                    <div class="movie-info">
                        <div class="info-section">
                            <label>Date & Time</label>
                            <span>{{$movie["release_date"]}}</span>
                        </div><!--date,time-->
                        <div class="info-section">
                            @include("includes.genre",['movie' => $movie])
                        </div><!--screen-->

                    </div>
                </div><!--movie-content-->
<!--                    @if (\Carbon\Carbon::parse($movie["release_date"])->format("Y")>=2020)-->
<!--                        <div class="ribben">-->
<!--                            <p>NEW</p>-->
<!--                        </div>-->
<!--                    @endif-->



blade;
    }

}

