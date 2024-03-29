<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>@yield("title")</title>
<meta name="keywords" content="@yield("keywords")">
<meta name="description" content="@yield("description")">
<meta name="author" content="Bayram OZCAN">
<link rel="icon" type="image/x-icon" href="@yield("icon")">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{asset('assets')}}/{{'assets'}}images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{asset('assets')}}/images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="{{asset('assets')}}/https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{asset('assets')}}/style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="{{asset('assets')}}/css/colors.css" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="{{asset('assets')}}/css/version/tech.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/owl.carousel.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/owl.default.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/stylee.css" rel="stylesheet">



<!--[if lt IE 9]>
<script src ="{{asset('assets')}}https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src ="{{asset('assets')}}https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<script src ="{{asset('assets')}}https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src ="{{asset('assets')}}https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src ="{{asset('assets')}}https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<![endif]-->
@yield('head')
</head>
<body>

@include('home.header')


@yield('slider')

@yield('content')


@include('home.footer')
@yield('foot')

</body>
</html>
