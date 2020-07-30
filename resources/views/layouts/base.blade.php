<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/12bool_def.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
  </head>
  <body>

    {{-- Includo l'Header --}}

    @include('partials/header');
    @include('partials/main');
    @include('partials/footer');







  </body>
</html>
