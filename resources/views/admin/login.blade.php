<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>


    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{asset('assets')}}/assets/css/basic.css" rel="stylesheet" />

    <link href="{{asset('assets')}}/assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{asset('assets')}}/assets/css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
<div class="container">
    <div class="row text-center " style="padding-top:100px;">
        <div class="col-md-12">
            <img src="assets/img/logo-invoice.png" />
        </div>
    </div>
    <div class="row ">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

            <div class="panel-body">
                <form role="form" action="{{route('loginadmincheck')}}" method="post" >
                    @csrf
                    <hr />
                    <h5>Enter Details to Login</h5>
                    <br />
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Your E-Mail " />
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                        <input type="password" class="form-control"  name="password" placeholder="Your Password" />
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" /> Remember me
                        </label>
                        <span class="pull-right">
                                                   <a href="index.html" >Forget password ? </a>
                                            </span>
                    </div>

                    <button class="btn btn-primary ">Login Now</button>
                    <hr />
                    Not register ? <a href="/registeruser" >click here </a> or go to <a href="index.html">Home</a>
                </form>
            </div>

        </div>


    </div>
</div>
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/tether.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/custom.js"></script>
<script src="{{asset('assets')}}/js/slider.js"></script>
<script src="{{asset('assets')}}/js/owl.js"></script>
<script src="{{asset('assets')}}/js/jqueryy.min.js"></script>
<script src="{{asset('assets')}}/js/popper.js"></script>
<script src="{{asset('assets')}}/js/bootstrapp.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>

</body>
</html>

