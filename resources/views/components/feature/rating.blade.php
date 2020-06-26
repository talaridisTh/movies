<ul class="d-flex justify-content-start list-unstyled">
    @php $test = true; @endphp
    @for ($i = 1; $i <=5; $i++)
        <li>
            @if(($movie["vote_average"]/2)<$i)
                @if(($movie["vote_average"]/2)<$i && $test)
                    <a href="#"><i class="fas fa-star-half" aria-hidden="true"></i></a>
                    @php $test = false; @endphp
                @else

                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                @endif
            @else
                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
            @endif
        </li>
    @endfor
</ul>
