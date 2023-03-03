<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

{{--        // This will load all component and styles and js--}}
        <title>Larazillow</title>
        @vite('resources/js/app.js')
{{--        //this directive comes with inertiaJs--}}
        @inertiaHead
    </head>
    <body>
{{--    // this directive comes with inertiaJs--}}
        @inertia
    </body>
</html>
