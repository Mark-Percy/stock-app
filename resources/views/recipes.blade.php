<x-layouts.main-layout>
    <x-slot:heading>{{ $heading }}<x-slot:heading>

    @foreach ($recipes as $recipe)
         <x-nav-link href="/recipes/{{$recipe['id']}}" :active="request()->is('/')">{{$recipe['name']}}</x-nav-link>
    @endforeach
</x-layouts.main-layout>