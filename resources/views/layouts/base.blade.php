<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    {{-- 12Bool --}}
    <link rel="stylesheet" href="{{ asset('css/12bool_def.css') }}">
    {{-- My Style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Title --}}
    <title>@yield('title')</title>
  </head>
  <body>

    {{-- Includo l'Header --}}

    @include('partials/header')
    @include('partials/main')
    @include('partials/footer')

    {{-- My script --}}

    <script src="{{asset('js/app.js')}}">

    </script>







  </body>
</html>
