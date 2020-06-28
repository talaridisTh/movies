<section class="single-image-movie" style="color: white;">
    <hr class="style-one my-5">
    <div class="container">
        <h2 class="my-5 text-white d-flex justify-content-center">Images</h2>
        <div class="row">
            @foreach($movie["images"]["backdrops"] as $cast)
                @if($loop->index<9)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="single-image">
                            <a href="https://image.tmdb.org/t/p/w500/{{$cast["file_path"]}}">
                                <img class="img-fluid"
                                     src='https://image.tmdb.org/t/p/w500/{{$cast["file_path"]}}'
                                     alt=""></a>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</section>
