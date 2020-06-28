<x-master>
    <x-feature.nav></x-feature.nav>

    <x-single.single-actor :actor="$actor"></x-single.single-actor>

    <x-single.single-AlsoKnowAs :alsoKnowAs="$actorMovies" :genreMovies="$genreMovies"></x-single.single-AlsoKnowAs>

</x-master>
