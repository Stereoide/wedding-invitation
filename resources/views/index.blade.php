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
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            background-color: #0079a4;
            background-image: url({{ asset('img/leuchtturm.jpg') }});
            background-position: left top;
            background-repeat: no-repeat;
            background-attachment: fixed;
            -webkit-background-size: cover;
            background-size: cover;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            height: 100vh;
            padding: 0;
            margin: 0;
        }

        .navigation {
            position: fixed;
            background-color: rgba(173, 81, 92, 0.9);
            top: 0;
            left: 0;
            right: 0;
        }

        .navigation UL {
            list-style-type: none;
            margin: 0;
            padding-left: 0;
        }

        .navigation LI {
            padding: 0.75em 1em;
        }

        .navigation LI.align-left {
            float: left;
            border-right: solid #FFF 1px;
        }

        .navigation LI.align-left:last-of-type {
            border-right: none;
        }

        .navigation LI.align-right {
            border-right: none;
            margin-right: 0;
        }

        .navigation .section-clicker {
            color: #FFF;
            font-weight: 300;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .navigation .section-clicker.align-right {
            float: right;
        }

        .navigation .section-clicker:hover {
            background-color: rgba(255, 255, 255, 0.95);
            color: #ad525c;
        }

        .section-clicker {
            cursor: pointer;
        }

        .section-clicker.underline {
            text-decoration: underline;
        }

        .sections {
            margin-top: 4em;
        }

        .section {
            width: 90%;
            background-color: rgba(255, 255, 255, 0.5);
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

        .section:hover {
            background-color: rgba(255, 255, 255, 0.95);
        }

        .section.hidden {
            display: none;
        }

        .section H1 {
            margin-top: 0;
            color: #ad515c;
        }

        .section P:last-of-type {
            margin-bottom: 0;
        }

        A {
            color: inherit;
        }

        .text {
            min-width: 50%;
            max-width: 80%;
        }

        .text H1 {
            font-family: 'Dancing Script';
            color: #000;
        }

        .anmeldung-submit-clicker {
            text-decoration: underline;
            cursor: pointer;
        }

        .bottom-filler {
            height: 600px;
        }
    </style>
</head>
<body>
    <div class="navigation">
        <ul>
            <li class="section-clicker align-left" data-target="wer">Wer</li>
            <li class="section-clicker align-left" data-target="was">Was</li>
            <li class="section-clicker align-left" data-target="wann">Wann</li>
            <li class="section-clicker align-left" data-target="wo">Wo</li>
            <li class="section-clicker align-left" data-target="wie">Wie</li>
            <li class="section-clicker align-right" data-target="warum">Wieso Weshalb Warum (FAQ)</li>
        </ul>
    </div>

    <div class="sections">
        <div class="section section-wer">
            <h1>Wer</h1>

            <p>
                Anja Riemann &amp; Jörn Maske
            </p>
        </div>

        <div class="section section-was">
            <h1>Was</h1>

            <p>
                Wir feiern unsere Hochzeit, welche einige Tage vorher im Kreise der Familie stattfinden wird.<br />
                Daher laden wir heute zu unserer Hochzeitsparty ein.
            </p>
        </div>

        <div class="section section-wann">
            <h1>Wann</h1>

            <p>
                Samstag, den 12.05.2018<br />
                Beginn: 17.30 Uhr
            </p>
        </div>

        <div class="section section-wo">
            <h1>Wo</h1>

            <p>
                Gaswerk Halberstadt<br />
                Wehrstedter Straße 48 A<br />
                38820 Halberstadt<br />
            </p>

            <p>
                Parkplätze sind in ausreichender Menge vor Ort, auf dem Gelände, verfügbar.
            </p>
        </div>

        <div class="section section-wie">
            <h1>Wie</h1>

            <p>
                Wir wünschen uns eine ungezwungene Party mit unseren Freunden, es muss sich daher niemand neu einkleiden.<br />
                Über eine festlich-legere Kleidung freuen wir uns.
            </p>

            <p>
                Wie ihr uns kennt, sind wir nicht die Gesellschaftsspielespieler, aus diesem Grund bereiten wir selbst keine Animation vor.<br />
                Für eventuelle Überraschungen wendet euch vertrauensvoll an unsere Koordinatorin: Vanessa Riemann (Handynummer: <a href="tel:+4915770606875">0157/70606875</a>)
            </p>
        </div>

        <div class="section section-warum">
            <h1>Wieso Weshalb Warum</h1>

            <p>
                Unsere FAQ´s / Das Kleingedruckte
            </p>

            <p>
                <strong>Anmeldung</strong>:<br />
                <span class="section-clicker underline" data-target="anmeldung">Wir brauchen bis zum 15.03.2018 die Rückmeldung, wer mit uns mitfeiert</span>.<br />
            </p>

            <p>
                <strong>Essen und Trinken</strong>:<br />
                es wird für alle etwas dabei sein.<br />
                Wenn wir diesbezüglich etwas für euch berücksichtigen sollen, teilt uns dies bitte bei der Anmeldung mit.
            </p>

            <p>
                <strong>Unterkünfte in Halberstadt</strong>:<br />
                gibt es jede Menge, <span class="section-clicker underline" data-target="unterkuenfte">in dieser Liste findet ihr eine Übersicht</span>
            </p>

            <p>
                <strong>Kinder</strong>:<br />
                sind herzlich eingeladen mit uns zu feiern, wenn ihr keine Betreuung organisieren könnt. Gerne können wir uns hierfür vor Ort umhören.<br />
                Es wird einen Kindertisch mit kleinen Mal- und Spielangeboten geben.
            </p>

            <p>
                <strong>Geschenke</strong>:<br />
                die immer gleiche Frage, was schenkt man dem Brautpaar?<br />
                Wir machen es euch einfach - wir werden im Herbst 2018 unsere Flitterwochen in Florida verbringen und ihr dürft entscheiden, ob wir<br />
                fliegen dürfen oder schwimmen müssen,<br />
                im Zelt schlafen oder im Hotel logieren,<br />
                Teller waschen oder Urlaub machen können.
            </p>
        </div>

        <div class="section section-unterkuenfte">
            <h1>Unterkunftsempfehlungen für Halberstadt</h1>

            <p>
                <strong>Hotels</strong>:
            </p>

            <p>
                <a href="http://hotel-allegro.de" rel="noopener" rel="noreferrer" target="_blank">Hotel Allegro</a> (fußläufig)<br />
            </p>

            <p>
                <a href="Hotel Ambiente" rel="noopener" rel="noreferrer" target="_blank">http://hotel-ambiente-halberstadt.de</a> (günstig)<br />
            </p>

            <p>
                <a href="Villa Heine" rel="noopener" rel="noreferrer" target="_blank">http://www.hotel-heine.de/</a> (exklusiv)<br />
            </p>

            <p>
                <a href="Halberstädter Hof" rel="noopener" rel="noreferrer" target="_blank">http://www.halberstaedter-hof.de/</a> (ruhig)<br />
            </p>

            <p>
                <strong>Pensionen / Ferienwohnungen</strong>:
            </p>

            <p>
                <a href="https://pension-in-halberstadt.de" rel="noopener" rel="noreferrer" target="_blank">Pension Am Burchardikloster</a><br />
            </p>

            <p>
                <a href="https://www.pensionvictoria.de" rel="noopener" rel="noreferrer" target="_blank">Pension Victoria</a><br />
            </p>

            <p>
                <a href="https://www.hawoge.de/service/ferienwohnungen.html " rel="noopener" rel="noreferrer" target="_blank">Ferienwohnung</a><br />
            </p>

            <p>
                <a href="http://www.halberstadt-hotel-pension.de" rel="noopener" rel="noreferrer" target="_blank">Pension Sankt Florian</a><br />
            </p>
        </div>

        <div class="section section-anmeldung">
            <h1>Anmeldung</h1>

            <p>
                <strong>Ich bin / wir sind</strong>:<br />
                <textarea id="anmeldung_namen" name="names" width="100%" cols="80" rows="2" wrap="soft"></textarea>
            </p>

            <p>
                <input type="radio" id="anmeldung_status_teilnahme" name="status" value="teilnahme" checked /> <label for="anmeldung_status_teilnahme">Ich möchte / wir möchten teilnehmen</label><br />
                <input type="radio" id="anmeldung_status_absage" name="status" value="absage" /> <label for="anmeldung_status_absage">Ich möchte / wir möchten können leider nicht teilnehmen</label><br />
            </p>

            <p>
                <strong>Und ich möchte euch noch folgendes sagen:</strong>:<br />
                <textarea id="anmeldung_kommentar" name="kommentar" width="100%" cols="80" rows="2" wrap="soft"></textarea>
            </p>

            <p>
                <span class="anmeldung-submit-clicker button">Abschicken</span>
            </p>
        </div>

        <div class="section section-anmeldung-abschluss hidden">
            <h1>Anmeldung</h1>

            <p>
                Vielen Dank für die Antwort, <span id="anmeldung_abschluss_namen"></span>.
            </p>

            <p class="anmeldung_abschluss_teilnahme">
                Schön, daß es klappt. Wir freuen uns.<br />
                Wenn es neue Informationen oder Änderungen am geplanten Ablauf gibt, werden wir uns natürlich nochmal rechtzeitig melden.
            </p>

            <p class="anmeldung_abschluss_absage">
                Schade, daß es nicht klappt.
            </p>
        </div>

        <div class="bottom-filler"></div>
    </div>

    <script type="text/javascript">
        function scrollTo(scrollTarget, duration){
            var $scrollTarget = $(scrollTarget);
            var scrollTargetTop = $scrollTarget.offset().top - 60;
            $("html:not(:animated),body:not(:animated)").animate({ scrollTop: scrollTargetTop}, duration);
        }

        jQuery(function() {
            jQuery('.section-clicker').click(function() {
                var target = '.section-' + jQuery(this).data('target');
                scrollTo(target, 1000);
            });

            jQuery('.anmeldung-submit-clicker').click(function() {
                /* Fetch data */

                var name = jQuery('#anmeldung_namen').val();
                var kommentar = jQuery('#anmeldung_kommentar').val();
                var anmeldungIsTeilnahme = jQuery('#anmeldung_status_teilnahme').is(':checked');

                /* Send data */

                jQuery.getJSON('anmeldung', {name: name, teilnahmestatus: (anmeldungIsTeilnahme ? 'Teilnahme' : 'Absage'), kommentar: kommentar});

                /* Switch to new view */

                jQuery('#anmeldung_abschluss_namen').html(name);

                if (anmeldungIsTeilnahme) {
                    jQuery('.anmeldung_abschluss_teilnahme').show();
                    jQuery('.anmeldung_abschluss_absage').hide();
                } else {
                    jQuery('.anmeldung_abschluss_teilnahme').hide();
                    jQuery('.anmeldung_abschluss_absage').show();
                }

                jQuery('.section-anmeldung-abschluss').removeClass('hidden');
                scrollTo('.section-anmeldung-abschluss', 1000);
            });
        });
    </script>
</body>
</html>
