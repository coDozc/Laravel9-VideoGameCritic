@extends('layouts.frontbase')

@section('title', $data->title)




@section('content')
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper" >
                        <div class="blog-title-area text-center">
                            <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">{{$data->category->title}}</a></li>
                                <li class="breadcrumb-item active">{{$data->title}}</li>
                            </ol>

                            <span class="color-orange"><a href="tech-category-01.html" title="">{{$data->category->title}}</a></span>

                            <h3>{{$data->title}}</h3>
                            @php
                                $average = $data->reviews->average('rate');
                            @endphp
                            <div class="blog-meta big-meta">
                                <small><a href="tech-single.html" title="">{{$data->date}}</a></small>
                                <small><a href="#" title=""><i class="fa fa-star"></i>{{$average}}</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="single-post-media">
                            <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid">
                        </div><!-- end media -->

                        <div class="blog-content">
                            <div class="pp">
                                <p><strong>Summary: </strong>{{$data->summary}} </p>
                            </div><!-- end pp -->

                            <div class="pp">

                                <p><strong>Hours: </strong> {{$data->hours}} </p>

                                <p><strong>Release Date: </strong> {{$data->date}} </p>
                                @foreach($images as $rs)
                                <img src="{{Storage::url($rs->image)}}" style="height: 350px; width: 350px">
                                @endforeach
                            </div><!-- end pp -->


                            <div class="pp">
                                <p><strong><br></b>Details: </strong> {!!$data->detail!!} <br></p>


                            </div><!-- end pp -->
                        </div><!-- end content -->

                        <div class="blog-title-area">
                            <div class="tag-cloud-single">
                                <span>Tags</span>
                                <small><a href="#" title="">lifestyle</a></small>
                                <small><a href="#" title="">colorful</a></small>
                                <small><a href="#" title="">trending</a></small>
                                <small><a href="#" title="">another tag</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <hr class="invis1">

                        <div class="custombox prevnextpost clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between text-right">
                                                    <img src="upload/tech_menu_19.jpg" alt="" class="img-fluid float-right">
                                                    <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                                    <small>Prev Post</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end col -->

                                <div class="col-lg-6">
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="upload/tech_menu_20.jpg" alt="" class="img-fluid float-left">
                                                    <h5 class="mb-1">Let's make an introduction to the glorious world of history</h5>
                                                    <small>Next Post</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end author-box -->

                        <hr class="invis1">
                        <div class="custombox authorbox clearfix">
                            <h4 class="small-title">About author</h4>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle">
                                </div><!-- end col -->

                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <h4><a href="#">Jessica</a></h4>
                                    <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Tech Blog!</p>

                                    <div class="topsocial">
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Youtube"><i class="fa fa-youtube"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Website"><i class="fa fa-link"></i></a>
                                    </div><!-- end social -->

                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end author-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">You may also like</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="upload/tech_menu_04.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="tech-single.html" title="">We are guests of ABC Design Studio</a></h4>
                                            <small><a href="blog-category-01.html" title="">Trends</a></small>
                                            <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->

                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="upload/tech_menu_06.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="tech-single.html" title="">Nostalgia at work with family</a></h4>
                                            <small><a href="blog-category-01.html" title="">News</a></small>
                                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">{{$data->reviews->count('id')}} Comments</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="comments-list">
                                        @foreach($reviews as $rs)
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img src="upload/author.jpg" alt="" class="rounded-circle">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading user_name">{{$rs->user->name}} <small>{{$rs->created_at}} <i class="fa fa-star"></i>{{$rs->rate}}</small></h4>
                                                <strong>{{$rs->subject}}</strong>
                                                <p>{{$rs->review}}</p>
                                                <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">Leave a Reply</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-wrapper" action="{{route('storecomment')}}" method="post">
                                        @csrf
                                        <input type="hidden" class="form-control" name="game_id" value="{{$data->id}}">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                                        <textarea class="form-control"  name="review" placeholder="Your comment"></textarea>

                                        <div class="form-group">
                                            <div class="input-rating">
                                                <strong class="text-uppercase">Your Rating: </strong>
                                                @php
                                                    $average = $data->reviews->average('rate');
                                                @endphp
                                                
                                                <div class="stars">
                                                    <input type="radio" class="fa fa-star" id="star1" name="rate" value="1"  /><label for="star1"></label>
                                                    <input type="radio" class="fa fa-star" id="star2" name="rate" value="2"  /><label for="star2"></label>
                                                    <input type="radio" class="fa fa-star" id="star3" name="rate" value="3"  /><label for="star3"></label>
                                                    <input type="radio" class="fa fa-star" id="star4" name="rate" value="4"  /><label for="star4"></label>
                                                    <input type="radio" class="fa fa-star" id="star5" name="rate" value="5"  /><label for="star5"></label>
                                                </div>
                                            </div>
                                        </div>
                                        @auth
                                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                                        @else
                                            <a href="/login" class="btn primary-btn">For Submit Your Review, Please Login</a>
                                        @endauth
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
                @include('home.sidebar')

            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
