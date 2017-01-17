@extends('layout')

@section('content')

        <!-- 1. With vanilla PHP: -->
        <h1>Vanilla PHP</h1>
        <?php foreach ($people as $person) : ?>
            <li><?= $person; ?></li>
        <?php endforeach ?>
<hr>
        <!-- 2. With blade: -->
        <!-- Behind the scenes blade builds the PHP fragments, then views are loaded and cashed. The cashed files is what gets loaded here. -->
        <h1>Blade</h1>
        <!-- unless, key word is the same as if(! ) -->
        @unless (empty($people))
            Burgers are being made!
        @else
            There is no one in the restaurant.
        @endunless

        @foreach ($people as $person)
            <li>{{$person}}</li>
        @endforeach

@stop
