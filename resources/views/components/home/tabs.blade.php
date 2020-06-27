<section id="about">
    <div class="more page-scroll" id="more">
        <a href="#about"><i class="fa fa-angle-down"></i></a>
    </div>
    <div class="container">
        <ul id="tabsJustified" class="nav nav-tabs nav-fill border-0 ">
            <li class="nav-item"><a href="home1" data-target="#home1" data-toggle="tab"
                                    class="nav-link small text-uppercase active text-light font-weight-bold">Popular
                    Movie</a>
            </li>
            <li class="nav-item"><a href="profile1" data-target="#profile1" data-toggle="tab"
                                    class="nav-link small text-uppercase  font-weight-bold text-light">Recent Movie</a>
            </li>
            <li class="nav-item"><a href="messages1" data-target="#messages1" data-toggle="tab"
                                    class="nav-link small text-uppercase font-weight-bold text-light">Top Movie</a>
            </li>
        </ul>
    </div>
    <div class="container-fluid mt-5 ">
        <div id="tabsJustifiedContent" class="tab-content ">
            <div id="home1" class="tab-pane fade   active show">
                <div class="row ">
                    <x-movies :movies="$popularMovies" :genreMovies="$genreMovies"></x-movies>
                </div>
            </div>
            <div id="profile1" class="tab-pane fade">
                <div class="row">
                    <x-movies :movies="$latestMovie" :genreMovies="$genreMovies"></x-movies>
                </div>
            </div>
            <div id="messages1" class="tab-pane fade">
                <div class="row">
                    <x-movies :movies="$topRateMovie" :genreMovies="$genreMovies"></x-movies>
                </div>
            </div>
        </div>
    </div>
</section>
