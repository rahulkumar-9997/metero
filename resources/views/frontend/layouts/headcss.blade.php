<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0">
@yield('meta')
<link rel="shortcut icon" href="{{asset('fronted/assets/images/favicon.png')}}">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="author" content="Hetero">
<link rel="canonical" href="{{ url()->current() }}" />
<link href="{{asset('fronted/assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('fronted/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('fronted/assets/css/nav.css')}}" rel="stylesheet">
<link href="{{asset('fronted/assets/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('fronted/assets/css/swiper.min.css')}}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">