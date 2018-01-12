<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anmeldung zur Hochzeit</title>
</head>
<body>
    <h1>Anmeldung zur Hochzeit</h1>

    <p>
        <strong>Wer:</strong><br />
        {{ $name }}<br />
    </p>

    <p>
        <strong>Wie:</strong><br />
        {{ $teilnahmestatus }}<br />
    </p>

@if (!empty($kommentar))
    <p>
        <strong>Was:</strong><br />
        {{ $kommentar }}<br />
    </p>
@endif
</body>
</html>
