<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mail App</title>
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
        <link rel="stylesheet" href="{{ asset('css/mail-app.css') }}">
    </head>
    <body>
        <div id="mail-app">
            <mail-app></mail-app>
        </div>
    </body>
    <script src="{{ asset('js/mail-app.js') }}"></script>
</html>
