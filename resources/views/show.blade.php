<x-master>

    <x-feature.nav></x-feature.nav>

    <x-single.single-movie :movie="$movie"></x-single.single-movie>

    <x-single.single-cast :movie="$movie"></x-single.single-cast>

    <x-single.single-image :movie="$movie"></x-single.single-image>



    <x-single.single-similar :similar="$similar" :genreMovies="$genreMovies"></x-single.single-similar>

</x-master>
