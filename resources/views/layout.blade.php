<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}"> <!-- Allows Laravel to look in our build directory and find the appropiate style sheet. -->
    </head>
    <body>
        <!-- Creating layout files:
        1. Create a layout file.
        2. 'yield' content where necessary.
        3. Insert it at their locations extends('layout') and section('content'). -->
        <!-- An identifier for a section that you create within your views: -->
        @yield('content')
        <!-- content is our keyword:
        you can have ('header') or ('footer') and insert them where necessary section('header')/section('footer'). -->
    </body>
</html>