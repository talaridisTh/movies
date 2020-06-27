<x-master>

     <x-home.header></x-home.header>

     <x-home.tabs :popularMovies="$popularMovies" :genreMovies="$genreMovies" :latestMovie="$latestMovie" :topRateMovie="$topRateMovie" ></x-home.tabs>

    <x-home.carousel :movies="$upComingMovie" :genreMovies="$genreMovies"></x-home.carousel>

</x-master>
