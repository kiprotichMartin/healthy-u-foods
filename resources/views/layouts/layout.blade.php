<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Healthy U</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <link href="/css/main.css" rel="stylesheet">
</head>

<body>

  @yield('content')

  <footer>
    <span>
      <p style="text-align: center;">&#169; Copyright 2020 ｜ Healthy U ｜ healthu@gmail.com</p>
      <p style="text-align: left;">Healthy U Foods</p>
      <p style="text-align: right;">Martin ｜Winnie｜Bertha｜Mitchelle｜Amy｜David</p>
    </span>
  </footer>
</body>

</html>