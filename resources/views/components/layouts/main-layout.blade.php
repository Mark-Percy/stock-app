<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="h-full">
        <x-layouts.app.header.header />
        <h1>{{ $heading }}</h1>
        {{$slot}}
    </body>
</html>