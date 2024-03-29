<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{asset('assets')}}/assets/css/basic.css" rel="stylesheet" />

    <link href="{{asset('assets')}}/assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{asset('assets')}}/assets/css/custom.css" rel="stylesheet" />
    <script src="{{asset('assets')}}/assets/js/bootstrap-fileupload.js"></script>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('head')
</head>

<body>

@yield('content')

@yield('foot')
<script src="{{asset('assets')}}/assets/js/bootstrap-fileupload.js"></script>
</body>
</html>
