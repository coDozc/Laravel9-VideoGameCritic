@extends('layouts.frontbase')

@section('title', 'Game Critic')


@section('slider')
    @include('home.slider')
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-top clearfix">
                            <h4 class="pull-left">New Games<a href="#"><i class="fa fa-rss"></i></a></h4>
                        </div><!-- end blog-top -->
                        @foreach($gamelist1 as $rs)
                        <div class="blog-list clearfix">
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{Storage::url($rs->image)}}" style="height: 300px; width: 250px" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="tech-single.html" title="">{{$rs->title}}</a></h4>
                                    <p>{{$rs->summary}}</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>
                                    <small><a href="tech-single.html" title="">21 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Matilda</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 1114</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                            @endforeach

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->


    </section>

@endsection
