<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gnome&trade; Garden Assistant</title>
    <meta content="GNOME" name="author"/>
    <meta content="Gnome, Garduino, Gardening, Tools, Smart, Water levels, Temperature, Lights" name="keywords"/>
    <meta content="Gnomes lives with your garden and becomes best friends with your plants. Gnome finds out if your plants are happy or sad and lets you know if they are thirsty too. " name="description"/>
    <meta property="og:url" content="www.gnome.co"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="GNOME&trade; Garden Assistant"/>
    <meta property="og:description" content="Gnomes lives with your garden and becomes best friends with your plants. Gnome finds out if your plants are happy or sad and lets you know if they are thirsty too."/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ URL::asset('css/splash.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="css/main.min.css" rel="stylesheet" type="text/css"> -->
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<header>
</header>
@yield('content')
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
   crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/splash.js') }}"></script>
</body>
</html>
