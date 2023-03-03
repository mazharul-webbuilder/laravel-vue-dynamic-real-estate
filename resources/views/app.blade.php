<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larazillow</title>
        @vite('resources/js/app.js') // This will load all component and styles and js
        @inertiaHead //this directive comes with inertiaJs
    </head>
    <body>
        @inertia // this directive comes with inertiaJs
    </body>
</html>
