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

    <title>Wedding Invitation</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background: #0079a4 url({{ asset('img/background.png') }}) left top repeat-x;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            padding: 0;
            margin: 0;
        }

        .lighthouse {
            width: 1400px;
            height: 980px;
            margin: 0 auto;
        }

        .floor-clicker {
            cursor: pointer;
        }

        DIV.floor-clicker {
            display: inline-block;
        }

        .floor-clicker.float-left {
            float: left;
        }

        .floor-clicker.float-right {
            float: right;
        }

        .texts {
            display: none;
        }

        .text {
            min-width: 50%;
            max-width: 80%;
        }

        .text H1 {
            font-family: 'Dancing Script';
            color: #000;
        }
    </style>
</head>
<body><center>
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1400px" height="980px" viewBox="0 0 1400 980" enable-background="new 0 0 1400 980" xml:space="preserve">
        <rect x="0" fill="#14DDF7" width="1400" height="980"/>
        <path fill="#FEFEFE" d="M295,249.5c-3.4-9.1-13-15.7-24.3-15.7c-0.4,0-0.7,0-1.1,0c-3.2-9.6-13-16.6-24.6-16.6 c-1.2,0-2.4,0.1-3.6,0.2c-3.1-2.8-7.1-5-11.5-6c-3.3-7.1-10.5-12.4-19.2-13.8c-3.2-15.3-18.1-26.9-36-26.9c-14,0-26.1,7.1-32.3,17.5 c-4.7,1.1-8.8,3.4-12,6.4c-4.7-4.4-11.3-7.2-18.6-7.2c-14.2,0-25.7,10.4-25.7,23.2c0,1,0.1,2,0.2,3c-0.1,0-0.1,0-0.2,0 c-14.2,0-25.7,10.4-25.7,23.2c0,4.7,1.6,9.1,4.3,12.8H295z"/>
        <path fill="#FEFEFE" d="M613.1,117.5c-3.4-9.1-13-15.7-24.3-15.7c-0.4,0-0.7,0-1.1,0c-3.2-9.6-13-16.6-24.6-16.6 c-1.2,0-2.4,0.1-3.6,0.2c-3.1-2.8-7.1-5-11.5-6c-3.3-7.1-10.5-12.4-19.2-13.8c-3.2-15.3-18.1-26.9-36-26.9c-14,0-26.1,7.1-32.3,17.5 c-4.7,1.1-8.8,3.4-12,6.4c-4.7-4.4-11.3-7.2-18.6-7.2c-14.2,0-25.7,10.4-25.7,23.2c0,1,0.1,2,0.2,3c-0.1,0-0.1,0-0.2,0 c-14.2,0-25.7,10.4-25.7,23.2c0,4.7,1.6,9.1,4.3,12.8H613.1z"/>
        <path fill="#FEFEFE" d="M1354,171.1c-3.4-9.1-13-15.7-24.3-15.7c-0.4,0-0.7,0-1.1,0c-3.2-9.6-13-16.6-24.6-16.6 c-1.2,0-2.4,0.1-3.6,0.2c-3.1-2.8-7.1-5-11.5-6c-3.3-7.1-10.5-12.4-19.2-13.8c-3.2-15.3-18.1-26.9-36-26.9c-14,0-26.1,7.1-32.3,17.5 c-4.7,1.1-8.8,3.4-12,6.4c-4.7-4.4-11.3-7.2-18.6-7.2c-14.2,0-25.7,10.4-25.7,23.2c0,1,0.1,2,0.2,3c-0.1,0-0.1,0-0.2,0 c-14.2,0-25.7,10.4-25.7,23.2c0,4.7,1.6,9.1,4.3,12.8H1354z"/>
        <path fill="#FEFEFE" d="M412.4,514.4c-3.4-9.1-13-15.7-24.3-15.7c-0.4,0-0.7,0-1.1,0c-3.2-9.6-13-16.6-24.6-16.6 c-1.2,0-2.4,0.1-3.6,0.2c-3.1-2.8-7.1-5-11.5-6c-3.3-7.1-10.5-12.4-19.2-13.8c-3.2-15.3-18.1-26.9-36-26.9c-14,0-26.1,7.1-32.3,17.5 c-4.7,1.1-8.8,3.4-12,6.4c-4.7-4.4-11.3-7.2-18.6-7.2c-14.2,0-25.7,10.4-25.7,23.2c0,1,0.1,2,0.2,3c-0.1,0-0.1,0-0.2,0 c-14.2,0-25.7,10.4-25.7,23.2c0,4.7,1.6,9.1,4.3,12.8H412.4z"/>
        <path fill="#FEFEFE" d="M1267.5,547.2c-3.4-9.1-13-15.7-24.3-15.7c-0.4,0-0.7,0-1.1,0c-3.2-9.6-13-16.6-24.6-16.6 c-1.2,0-2.4,0.1-3.6,0.2c-3.1-2.8-7.1-5-11.5-6c-3.3-7.1-10.5-12.4-19.2-13.8c-3.2-15.3-18.1-26.9-36-26.9c-14,0-26.1,7.1-32.3,17.5 c-4.7,1.1-8.8,3.4-12,6.4c-4.7-4.4-11.3-7.2-18.6-7.2c-14.2,0-25.7,10.4-25.7,23.2c0,1,0.1,2,0.2,3c-0.1,0-0.1,0-0.2,0 c-14.2,0-25.7,10.4-25.7,23.2c0,4.7,1.6,9.1,4.3,12.8H1267.5z"/>
        <path fill="#FEFEFE" d="M1072,367.9c-3.4-9.1-13-15.7-24.3-15.7c-0.4,0-0.7,0-1.1,0c-3.2-9.6-13-16.6-24.6-16.6 c-1.2,0-2.4,0.1-3.6,0.2c-3.1-2.8-7.1-5-11.5-6c-3.3-7.1-10.5-12.4-19.2-13.8c-3.2-15.3-18.1-26.9-36-26.9c-14,0-26.1,7.1-32.3,17.5 c-4.7,1.1-8.8,3.4-12,6.4c-4.7-4.4-11.3-7.2-18.6-7.2c-14.2,0-25.7,10.4-25.7,23.2c0,1,0.1,2,0.2,3c-0.1,0-0.1,0-0.2,0 c-14.2,0-25.7,10.4-25.7,23.2c0,4.7,1.6,9.1,4.3,12.8H1072z"/>
        <path fill="#FEFEFE" d="M1007.6,671.4c-3.4-9.1-13-15.7-24.3-15.7c-0.4,0-0.7,0-1.1,0c-3.2-9.6-13-16.6-24.6-16.6 c-1.2,0-2.4,0.1-3.6,0.2c-3.1-2.8-7.1-5-11.5-6c-3.3-7.1-10.5-12.4-19.2-13.8c-3.2-15.3-18.1-26.9-36-26.9c-14,0-26.1,7.1-32.3,17.5 c-4.7,1.1-8.8,3.4-12,6.4c-4.7-4.4-11.3-7.2-18.6-7.2c-14.2,0-25.7,10.4-25.7,23.2c0,1,0.1,2,0.2,3c-0.1,0-0.1,0-0.2,0 c-14.2,0-25.7,10.4-25.7,23.2c0,4.7,1.6,9.1,4.3,12.8H1007.6z"/>
        <rect x="0" y="784.3" fill="#007AA5" width="1400" height="195.7"/>
        <path fill="#F5B466" d="M1104.7,790c0.1-0.7,0.2-1.3,0.2-2c0-34.2-181.3-62-405-62s-405,27.8-405,62c0,0.7,0.1,1.3,0.2,2H1104.7z"/>
        <g>
            <g>
                <polygon fill="#EFEFEF" points="763.6,697.9 636.4,697.9 661.4,287 738.6,287"/>
                <polygon fill="#FEFEFE" points="726.2,697.9 673.8,697.9 684.1,287 715.9,287"/>
                <polygon fill="#C24407" points="744.3,381.4 655.7,381.4 658.7,330.9 741.3,330.9"/>
                <polygon fill="#F05201" points="718.2,381.4 681.8,381.4 683,330.9 717,330.9"/>
                <polygon fill="#C24407" points="752.2,511.4 647.8,511.4 652,442.2 748,442.2"/>
                <polygon fill="#F05201" points="721.5,511.4 678.5,511.4 680.2,442.2 719.8,442.2"/>
                <polygon fill="#C24407" points="763.6,697.9 636.4,697.9 642.6,597.1 757.4,597.1"/>
                <polygon fill="#F05201" points="726.2,697.9 673.8,697.9 676.4,597.1 723.6,597.1"/>
            </g>
            <rect x="661.4" y="211.9" fill="#C24407" width="77.2" height="75.1"/>
            <rect x="684.1" y="211.9" fill="#F05201" width="31.8" height="75.1"/>
            <path fill="#494748" d="M710.1,287h-20.3v-37.8c0-5.6,4.5-10.1,10.1-10.1h0c5.6,0,10.1,4.5,10.1,10.1V287z"/>
            <g>
                <rect x="719.9" y="166.2" fill="#2F292B" width="28.4" height="45.7"/>
                <rect x="723.6" y="169.6" fill="#FFEBA3" width="20.9" height="38.8"/>
                <rect x="651.7" y="166.2" fill="#2F292B" width="28.4" height="45.7"/>
                <rect x="655.5" y="169.6" fill="#FFEBA3" width="20.9" height="38.8"/>
                <rect x="680.1" y="166.2" fill="#494748" width="39.7" height="45.7"/>
                <rect x="683.9" y="169.6" fill="#FFEBA3" width="32.2" height="38.8"/>
            </g>
            <path fill="#2F292B" d="M627.1,246v1.8v5.1v27.2v5.9v1h145.9v-1v-5.9v-27.2v-5.1V246H627.1z M680.8,252.8h15.4v27.2h-15.4V252.8z M673.1,280.1h-15.4v-27.2h15.4V280.1z M703.8,252.8h15.4v27.2h-15.4V252.8z M726.9,252.8h15.4v27.2h-15.4V252.8z M634.7,252.8 h15.4v27.2h-15.4V252.8z M765.3,280.1h-15.4v-27.2h15.4V280.1z"/>
            <polygon fill="#2F292B" points="700,132.6 768.6,166.2 732.9,166.2"/>
            <polygon fill="#494748" points="700,132.6 667.1,166.2 700,166.2 732.9,166.2"/>
            <polygon fill="#2F292B" points="700,132.6 631.4,166.2 667.1,166.2"/>
            <rect x="651.7" y="166.2" fill="#110E0F" width="96.5" height="1.8"/>
            <path fill="#2F292B" d="M722.8,330.9l-1-20.1c-0.2-3.2,2.6-5.9,6.2-5.9l0,0c3.2,0,5.9,2.3,6.2,5.3l1.5,20.8H722.8z"/>
            <path fill="#2F292B" d="M655.5,511.4l1.8-29.9c0.2-3.7,3.5-6.5,7.5-6.5l0,0c4.2,0,7.6,3.2,7.5,7.1l-0.7,29.3H655.5z"/>
            <path fill="#2F292B" d="M714.5,697.9h-29l1.1-43.9c0.2-6.7,6.1-12,13.4-12h0c7.3,0,13.2,5.3,13.4,12L714.5,697.9z"/>
            <polygon fill="#2F292B" points="818.2,718.2 790,687.9 700,687.9 610,687.9 581.8,718.2 534.1,718.2 534.1,738.9 562.6,738.9 700,738.9 837.4,738.9 865.9,738.9 865.9,718.2"/>
            <polygon fill="#494748" points="745.3,718.2 734.5,687.9 700,687.9 665.5,687.9 654.7,718.2 636.4,718.2 636.4,738.9 647.4,738.9 700,738.9 752.6,738.9 763.6,738.9 763.6,718.2"/>
        </g>
        <g>
            <path fill="#006D8E" d="M242.6,814.9c21,4.5,40.4,7.2,62.5,6c12.5-0.6,39.8,3.3,13.9,16.2c-8.1,4-51.9-0.3-25.6,18.3 c17.9,12.6,47.3,2.3,65.7-0.5c11.7-1.7,48.3-7.1,34,14.1c-9.3,13.8-34.2,3.4-45.8,13.9c19.2,27.5,70.3,11.2,101.9,5.6 c2.6-0.5,4.4,2.5,2.8,4.6c-5.7,7.6,4.5,15.8,17.1,17.9c18.5,3.1,43.5-5.2,62.1-6.2c27.2-1.5,54.1,4.7,80.7,4.7 c3.2,0,4.1,4.4,1.1,5.6c-6.6,2.6-14.8,4.5-15.5,11.7c-1,10.2,21.8,6.4,29.6,6.1c17.8-0.7,34.6-5.3,52-5.9c5.4-0.2,8.6,5.9,5.3,10.2 C676,948,667.8,956.6,693,959c15.8,1.5,32.6-2.1,47.8-6.6c5.6-1.6,5.5-9.6-0.1-11.1c-4.2-1.1-9.8-0.5-14.7-1.2 c-4.1-0.6-5.3-6-1.7-8.2c26.8-16.7,96.3,18.6,122.8,0.4c5.4-3.7,2.9-12.1-3.6-12.6c-14.8-1.1-35.1,3.9-40.7-3 c-13.4-16.7,41.9-10,48.1-9.7c15.5,0.6,88.6,6.7,109.9-7.2c4.8-3.1,2.2-10.6-3.5-10.1c-18.9,1.5-52.9,6.8-60.5,1.5 c-26.1-18.2,40.1-18.3,45.9-18c24.1,1.2,48.7-1.1,72.1-2.1c19.2-0.9,44.7,4.3,64.1,0c6.4-1.4,8.1-10,2.6-13.6 c-15.4-10-59.8,0.5-44.8-18.8c10.7-13.8,70.5-8.8,87.7-9.6c12.3-0.6,82.9,4.3,60.4-18.1c-13.8-13.7-42.1,1-60.9,1 c-7.5,0-9-10.8-1.8-12.9c11.4-3.3,25.8-2.2,26.8-14.1c0-0.2,0-0.4,0-0.6H234.9C219.2,796,212.3,808.5,242.6,814.9z"/>
        </g>

        <g class="floor-clickers">
            <polygon class="floor-clicker" data-target="wer" fill="#00FF00" points="661.4,287 738.6,287 741.3,330.9 658.7,330.9" fill-opacity="0"/>
            <polygon class="floor-clicker" data-target="was" fill="#00FF00" points="744.3,381.4 655.7,381.4 658.7,330.9 741.3,330.9" fill-opacity="0"/>
            <polygon class="floor-clicker" data-target="wann" fill="#00FF00" points="744.3,381.4 655.7,381.4 652,442.2 748,442.2" fill-opacity="0"/>
            <polygon class="floor-clicker" data-target="wo" fill="#00FF00" points="752.2,511.4 647.8,511.4 652,442.2 748,442.2" fill-opacity="0"/>
            <polygon class="floor-clicker" data-target="wie" fill="#00FF00" points="752.2,511.4 647.8,511.4 642.6,597.1 757.4,597.1" fill-opacity="0"/>
            <polygon class="floor-clicker" data-target="warum" fill="#00FF00" points="763.6,697.9 636.4,697.9 642.6,597.1 757.4,597.1" fill-opacity="0"/>
        </g>
    </svg>

    <div class="texts">
        <div class="text text-wer">
            <h1>Wer</h1>

            <p>
                Anja Riemann &amp; Jörn Maske
            </p>

            <p>
                <span class="floor-clicker floor-clicker-previous float-left" data-target="warum">Wieso Weshalb Warum</span>
                <span class="floor-clicker floor-clicker-next float-right" data-target="was">Was</span>
            </p>
        </div>

        <div class="text text-was">
            <h1>Was</h1>

            <p>
                Wir feiern unsere Hochzeit, welche einige Tage vorher im Kreise der Familie stattfinden wird.<br />
                Daher laden wir heute zu unserer Hochzeitsparty ein.
            </p>

            <p>
                <span class="floor-clicker floor-clicker-previous float-left" data-target="wer">Wer</span>
                <span class="floor-clicker floor-clicker-next float-right" data-target="wann">Wann</span>
            </p>
        </div>

        <div class="text text-wann">
            <h1>Wann</h1>

            <p>
                Samstag, den 12.05.2018<br />
                Beginn: 17.30 Uhr
            </p>

            <p>
                <span class="floor-clicker floor-clicker-previous float-left" data-target="was">Was</span>
                <span class="floor-clicker floor-clicker-next float-right" data-target="wo">Wo</span>
            </p>
        </div>

        <div class="text text-wo">
            <h1>Wo</h1>

            <p>
                Gaswerk Halberstadt<br />
                Wehrstedter Straße 48 A<br />
                38820 Halberstadt<br />
            </p>

            <p>
                Parkplätze sind in ausreichender Menge vor Ort, auf dem Gelände, verfügbar.
            </p>

            <p>
                <span class="floor-clicker floor-clicker-previous float-left" data-target="wann">Wann</span>
                <span class="floor-clicker floor-clicker-next float-right" data-target="wie">Wie</span>
            </p>
        </div>

        <div class="text text-wie">
            <h1>Wie</h1>

            <p>
                Wir wünschen uns eine ungezwungene Party mit unseren Freunden, es muss sich daher niemand neu einkleiden.<br />
                Über eine festlich-legere Kleidung freuen wir uns.
            </p>

            <p>
                Wie ihr uns kennt, sind wir nicht die Gesellschaftsspielespieler, aus diesem Grund bereiten wir selbst keine Animation vor.<br />
                Für eventuelle Überraschungen wendet euch vertrauensvoll an unsere Koordinatorin: Vanessa Riemann (Handynummer: <a href="tel:+49123456789">0123/456-789</a>)
            </p>

            <p>
                <span class="floor-clicker floor-clicker-previous float-left" data-target="wo">Wo</span>
                <span class="floor-clicker floor-clicker-next float-right" data-target="warum">Wieso Weshalb Warum</span>
            </p>
        </div>

        <div class="text text-warum">
            <h1>Wieso Weshalb Warum</h1>

            <p>
                Unsere FAQ´s / Das Kleingedruckte
            </p>

            <p>
                <strong>Anmeldung</strong>: Wir brauchen bis zum 15.03.2018 die Rückmeldung, wer mit uns mitfeiert.<br />
                HIER lang.
            </p>

            <p>
                <strong>Essen und Trinken</strong>: es wird für alle etwas dabei sein.<br />
                Wenn wir diesbezüglich etwas für euch berücksichtigen sollen, teilt uns dies bitte bei der Anmeldung mit.
            </p>

            <p>
                <strong>Unterkünfte in Halberstadt</strong>: gibt es jede Menge, in dieser Liste findet ihr eine Übersicht (Verlinkung)
            </p>

            <p>
                <strong>Kinder</strong>: sind herzlich eingeladen mit uns zu feiern, wenn ihr keine Betreuung organisieren könnt. Gerne können wir uns hierfür vor Ort umhören.<br />
                Es wird einen Kindertisch mit kleinen Mal- und Spielangeboten geben.
            </p>

            <p>
                <strong>Geschenke</strong>: die immer gleiche Frage, was schenkt man dem Brautpaar?<br />
                Wir machen es euch einfach - wir werden im Herbst 2018 unsere Flitterwochen in Florida verbringen und ihr dürft entscheiden, ob wir<br />
                fliegen dürfen oder schwimmen müssen,<br />
                im Zelt schlafen oder im Hotel logieren,<br />
                Teller waschen oder Urlaub machen können.
            </p>

            <p>
                <span class="floor-clicker floor-clicker-previous float-left" data-target="wie">Wie</span>
                <span class="floor-clicker floor-clicker-next float-right" data-target="wer">Wer</span>
            </p>
        </div>

    </div>

    <script type="text/javascript">
        jQuery(function() {
            jQuery('.floor-clicker').click(function() {
                var target = jQuery(this).data('target');
                console.log(target);
                jQuery.fancybox.close();
                jQuery.fancybox.open(jQuery('.text-' + target));
            });
        });
    </script>
</center></body>
</html>
