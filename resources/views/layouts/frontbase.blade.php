<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Game Critic</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="public/assets/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="public/assets/images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="public/assets/css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="public/assets/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="public/assets/style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="public/assets/css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="public/assets/css/colors.css" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="public/assets/css/version/tech.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@yield("head")
</head>
<body>

@include('home.header')


@yield('content')

@include('home.footer')
@yield('foot')

</body>
</html>
