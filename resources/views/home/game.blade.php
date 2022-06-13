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
                                <small><a href="#" title="">{{$data->date}}</a></small>
                                <small><a href="#" title=""><i class="fa fa-star"></i>{{$average}}</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="{{$setting->facebook}}" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="{{$setting->twitter}}" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="{{$setting->instagram}}" class="gp-button btn btn-primary"><i class="fa fa-instagram-plus"></i></a></li>
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


                        <div class="custombox authorbox clearfix">

                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

                                </div><!-- end col -->

                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

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
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                @include('home.sidebar')

            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
