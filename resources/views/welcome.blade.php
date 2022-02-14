<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Tech Events Manager</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<x-header />

<x-slider />

<x-cards />

<x-cards-past />

<x-footer />

</html>
