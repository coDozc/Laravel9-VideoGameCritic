@extends('layouts.frontbase')

@section('title', 'Contact' , $setting->title)
@section('keywords', $setting->keywords)
@section('description', $setting->description)
@section('icon', Storage::url($setting->icon))

@section('content')
    <div class="page-title lb single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-envelope-open-o bg-orange"></i> Contact us <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-lg-5">
                                <p>{!! $setting->contact !!}</p>

                            </div>
                            <div class="col-lg-7">
                                <h1>{{Session::get('info')}}</h1>
                                <form class="form-wrapper" action="{{route("storemessage")}}" method="post">
                                    @csrf
                                    <input type="text" class="form-control" name="name" placeholder="First Name">
                                    <input type="email" class="form-control" name="email" placeholder="Email address">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                                    <input type="text" class="form-control" name=subject" placeholder="Subject">
                                    <textarea class="form-control" name="message" placeholder="Your message"></textarea>
                                    <button type="submit" class="btn btn-primary">Send <i class="fa fa-envelope-open-o"></i></button>
                                </form>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
