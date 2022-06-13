<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-top clearfix">
                        <h4 class="pull-left">Top Games <a href="#"><i class="fa fa-rss"></i></a></h4>
                    </div><!-- end blog-top -->

                    <div class="blog-list clearfix">
                        @foreach($gamelist1 as $rs)
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="{{route('game', ['id'=>$rs->id])}}" title="">
                                        <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                @php
                                    $average = $rs->reviews->average('rate');
                                @endphp
                                <h4><a href="tech-single.html" title="">{{$rs->title}}</a></h4>
                                <p><p>{{Str::limit($rs->summary, 250)}}</p></p>
                                <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">{{$rs->category->title}}</a></small>
                                <small><a href="tech-single.html" title="">{{$rs->date}}</a></small>
                                <small><a href="tech-author.html" title="">{{$average}}<i class="fa fa-star"></i></a></small>
                                <small>{{$rs->reviews->count('id')}} Comments</small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">
                        @endforeach
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

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

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                @include('home.sidebar')
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
