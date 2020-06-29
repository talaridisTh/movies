<section class="single-cast" style="color: white;">
    <hr class="style-one ">
    <div class="container">
        <h2 class="my-5 text-white d-flex justify-content-center">Cast</h2>
        <div class="row">
            @foreach($movie["casts"]["cast"] as $cast)

                @if($loop->index<4)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-author">
                            <a href="{{route('movies.actor',$cast["id"])}}">
                                <img class="img-fluid"
                                     src='https://image.tmdb.org/t/p/w300/{{$cast["profile_path"]}}'
                                     alt="">
                                <p class="font-weight-bold h3 text-white mt-1">{{$cast["name"]}}</p>
                            </a>
                            <span class="font-weight-bold">Character : </span><span class="font-italic">{{$cast["character"]}}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
