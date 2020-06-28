<section class="main-movie my-5" style="color: #ffffff;">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="img-container">
                        <img class="img-fluid" src="https://image.tmdb.org/t/p/w500/{{$movie["poster_path"]}}" alt=""/>
                    </div>
                    <div class="card-details">
                        <h3>Description</h3>
                        <p>{{$movie['overview']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="single-info">
                    <h1 class="single-title">{{$movie['title']}}</h1>
                    <div class="single-rating-genre mb-4 d-flex">
                        <span class="mr-2"><x-feature.rating :movie="$movie"></x-feature.rating></span>
                        <span class="mr-2">{{$movie['release_date']}}</span>
                        <x-feature.genre :movie="$movie"></x-feature.genre>
                    </div>
                    <div class="single-crew row">
                        <h3 class="col-md-12 mb-3">Featured Crew</h3>
                        @foreach($movie["casts"]["crew"] as $cast)
                            @if($loop->index<2)
                                <div class="col-md-3 d-flex flex-column mb-4">
                                   <span>Name: <i>{{$cast["name"]}}</i></span>
                                    <span>Jop: <i>{{$cast["job"]}}</i></span>
                                </div>
                            @endif
                        @endforeach

                    </div>

                    <div class="single-button row">
                        <h3 class="col-md-12 mb-3">Extranal link</h3>
                        <a target="_blank" href="{{App\Movie::pathVideo($movie)}}">
                            <button style="width: 180px" class="btn btn-outline-danger  mr-5 mt-3 "><span class="h3">Trailer</span></button>
                        </a>
                        <a target="_blank" href="{{App\Movie::pathImdb($movie,'movie')}}">
                            <button style="width: 180px"  class="btn btn-outline-warning px-5 mt-3 "><span class="h3">Imdb</span></button>
                        </a>

                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
