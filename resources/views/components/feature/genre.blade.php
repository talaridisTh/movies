@if(isset($genreMovies))
<label>Genres</label>
<span style="font-weight: normal"> @foreach ($movie["genre_ids"] as $genre)
        {{$genreMovies->get($genre)}}
        @if(!$loop->last)| @endif
    @endforeach</span>
@else
    <span style="font-weight: normal"> @foreach ($movie["genres"] as $genre)
            {{$genre['name']}}
            @if(!$loop->last)| @endif
        @endforeach</span>
@endif
