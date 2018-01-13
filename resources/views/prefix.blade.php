<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <!-- Fancybox 3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

    <title>Einladung zur Hochzeitsfeier</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            height: 100vh;
            padding: 0;
            margin: 0;
        }

        body:after{
            content:"";
            position:fixed; /* stretch a fixed position to the whole screen */
            top:0;
            height:100vh; /* fix for mobile browser address bar appearing disappearing */
            left:0;
            right:0;
            z-index:-1; /* needed to keep in the background */
            background-color: #0079a4;
            background-image: url({{ asset('img/leuchtturm.jpg') }});
            background-position: left top;
            background-repeat: no-repeat;
            background-attachment: fixed;
            -webkit-background-size: cover;
            background-size: cover;
        }

        .sections {
            margin-top: 1em;
        }

        .section {
            width: 90%;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 1em;
            margin: 0 auto 2em auto;
            border-top-left-radius: 15px;
            border-bottom-right-radius: 15px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .section H1 {
            margin-top: 0;
            font-family: 'Dancing Script', sans-serif;
            font-weight: 100;
            color: #ad515c;
        }

        .section P:last-of-type {
            margin-bottom: 0;
        }

        .section P IMG {
            float: left;
            margin: 0 1em 1em 0;
            width: 400px;
        }

        .section P DIV {
            text-align: justify;
            text-indent: 2em;
        }

        .section-intro:after {
            content: "";
            display: table;
            clear: both;
        }

        A {
            color: inherit;
        }
    </style>
</head>
<body>
    <div class="sections">
        <div class="section section-intro">
            <h1>Veni, Vidi, Vodka</h1>

            <p>
                <img src="{{ asset('img/photo.jpg') }}" alt="" border="0" />

                <div>
                    Wer hätte es gedacht, wir trauen uns.
                </div>
            </p>

            <p>
                Nachdem wir nun das verflixte 7. Jahr überstanden haben, gab es in unserem ersten Pärchenurlaub im Oktober 2017 am Ostseestrand von Warnemünde den sehnlichst erwarteten Antrag.
            </p>

            <p>
                Welch Glück für ihn, der Ring gefiel und passte und so gab es ein tränenreiches JA von ihr.
            </p>

            <p>
                Da wir im Urlaub reichlich Zeit hatten, wurden Nägel mit Köpfen gemacht, ein Termin gefunden, die Location recherchiert und kaum 4 Wochen später war der Plan "Hochzeit" spruchreif.
            </p>

            <p>
                Heute nun kommt die offfizielle Einladung zu unserer Hochzeitsparty.<br />
                Und wir würden uns freuen, wenn du dabei bist.
            </p>

            <p>
                <a href="{{ route('index') }}">Alle Infos gibt es hier</a>
            </p>

            <p>
                Anja & Jörn Maske
            </p>
        </div>
    </div>
</body>
</html>
