<section class="single-similar-movie">
    <hr class="style-one my-5">
    <div class="container-fluid">
        <h2 class="my-5 text-white d-flex justify-content-center">Also Know As</h2>
        <div class="row justify-content-center">
            <x-movies :movies="collect($alsoKnowAs)->random(4)" :genreMovies="$genreMovies"></x-movies>
        </div>
    </div>
</section>
    <section class="single-similar-movie">
        <hr class="style-one my-5">
        <div class="container">
            <h2 class="font-weight-bold text-white my-3">Filmography</h2>
            <ul class="d-flex flex-column col-md-6">
                @foreach($alsoKnowAs as $movieTitle)
                    <li class="text-white d-flex justify-content-between">
                        <div>
                            @if(isset($movieTitle["release_date"]))
                            {{\Carbon\Carbon::parse($movieTitle["release_date"])->format('Y')}} -
                            @endif
                            <a class="font-weight-bold text-white" href="{{route('movies.show',$movieTitle['id'])}}"><span >{{$movieTitle["original_title"]}}</span></a>
                                @if(isset($movieTitle["character"]))
                            <span class="font-italic text-info">as {{$movieTitle["character"]}}character</span>
                                @endif
                        </div>
                        <div>
                            <a target="_blank" href="{{App\Movie::pathImdb($movieTitle,'movie')}}">
                                <button class=" mb-1 btn btn-outline-warning btn-sm"><span>Imdb</span></button>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>

        </div>

</section>
