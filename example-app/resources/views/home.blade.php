<!DOCTYPE>
<html>

<head>
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <title>Netflix</title>
</head>

<body>
    <img src="{{ asset('Netflix.svg')}}" class="NetflixLogo">
    <div class="blocks">
        <div class="block">
            <h2>{{ $filmOne }}</h2>
            <img src="{{ asset('Dahmer.webp')}}" class="filmPic">
            <p>{{ $descriptionOne }}</p>
        </div>
        <div class="block">
            <h2>{{ $filmTwo }}</h2>
            <img src="{{ asset('saul.jpg')}}" class="filmPic">
            <p>{{ $descriptionTwo }}</p>
        </div>
    </div>
    <div class="blocks">
        <div class="block">
            <h2>{{ $filmThree }}</h2>
            <img src="{{ asset('dlu.jpg')}}" class="filmPic">
            <p>{{ $descriptionThree }}</p>
        </div>
        <div class="block">
            <h2>{{ $filmFour }}</h2>
            <img src="{{ asset('grayman.jpg')}}" class="filmPic">
            <p>{{ $descriptionFour }}</p>
        </div>
    </div>
</body>

</html>