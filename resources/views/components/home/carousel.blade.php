<section class="slide-box mt-5 ml-5">
    <h1 class="text-white">LATEST MOVIES</h1>
    <div class="myButton d-flex justify-content-end mr-5">
        <button class="btn btn-white btn-animate prev  bg-light">Back</button>
        <button class="btn btn-white btn-animate next  bg-light">Next</button>
        <div class="pagination"></div>
    </div>
    <div class="slider center text-center">
        @foreach($movies as $movie)
            <div class="slide">
                <div class="movie-card">
                    <div class="hovereffect header-icon-container manOfSteel"
                         style="background: url('https://image.tmdb.org/t/p/w500/.{{$movie["poster_path"]}}');
                             background-size:cover;
                             ">
                        <div class="manOfSteel"></div>
                        <div class="overlay d-flex flex-column justify-content-around">
                            <p>
                                <a class="font-weight-bold border p-2"  href="#">LINK HERE</a>
                            </p>
                            <p>
                                <a class="font-weight-bold border p-2" href="#">LINK HERE</a>
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
    </div>
</section>
