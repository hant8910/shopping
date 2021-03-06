<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        <title>Shopping Cart</title>

        <!-- Styles -->
    </head>
    <body>
        <div class="w3-container w3-teal">
            <div class="header"><h1>Shopping Cart</h1></div>
            <div id="vue">

            </div>
        </div>
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
