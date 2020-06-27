<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie api</title>

    <script src="https://kit.fontawesome.com/6a3930ec32.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css"/>

    <link href="{{ mix('css/style.css') }}" rel="stylesheet">

</head>
<body style="background-color: #3C3C3C;">

@if(request()->is("/"))
{{--    @include("includes.header")--}}
@endif
{{$slot}}
{{--@include("includes.footer")--}}

<!-- Scripts -->

<script src="{{ mix('js/app.js') }}" ></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<script src="{{ mix('js/custom.js') }}" ></script>
</body>
</html>
