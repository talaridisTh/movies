<section class="main-movie my-5" style="color: #ffffff;">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 col-lg-4">
                <div class="singe-actor-image">
                    <img style="max-height: 450px" class="img-fluid" src="https://image.tmdb.org/t/p/w500/.{{$actor["profile_path"]}}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-8 flex flex-column justify-content-around">
                <div class="single-info">
                    <h1 class="single-acto-title">{{$actor['name']}}</h1>
                </div>
                <div class="single-actor-description my-3 ">{{$actor['biography']}}</div>
                <div class="single-actor-info mb-4 row ">
                    <ul class="col-md-8">
                        <li>
                            <span class="font-weight-bold">Birthday : </span><span class="font-italic">{{App\Movie::actor($actor)}}</span>
                        </li>
                        <li>
                            <span class="font-weight-bold">Place of birth : </span><span class="font-italic">{{$actor['place_of_birth']}}</span>
                        </li>
                    </ul>
                    <div class="single-actor-button col-md-4">
                        <a target="_blank" href="{{App\Movie::pathImdbActor($actor)}}">
                            <button style="width: 180px"  class="btn btn-outline-warning px-5 mt-3 "><span class="h3">Imdb</span></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


