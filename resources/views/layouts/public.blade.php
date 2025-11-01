<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5886955702875635"
     crossorigin="anonymous"></script>
    <script src="//code.tidio.co/adxb4cp0vgwtpic1tx5bdpkqpoap5wrq.js" async></script>
    <meta name="description" content="This is my awesome website about movies, tech, and more."> <!-- Description -->
  <meta name="keywords" content="moviessite"> <!-- Keywords (optional) -->
  <meta name="robots" content="index, follow"> <!-- Allow search engines to index -->
  <meta name="author" content="Devesh">
    <link rel="canonical" href=https://moviessite-production-1246.up.railway.app/">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Movie App</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
