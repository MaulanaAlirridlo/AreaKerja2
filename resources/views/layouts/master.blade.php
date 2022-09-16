<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
  <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
  @yield('css')
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
  <title>Area Kerja - @yield('title')</title>
</head>

<body>
  @yield('content')
  <script src="https://kit.fontawesome.com/d770eb273a.js" crossorigin="anonymous"></script>
</body>

</html>