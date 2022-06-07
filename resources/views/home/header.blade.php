<div id="wrapper">
<header class="tech-header header">
    <div class="container-fluid">
        @php
            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
        @endphp
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="tech-index.html"><img src="images/version/tech-logo.png" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="tech-index.html">Home</a>
                    </li>

                    <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Games</a>
                        <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            @foreach($mainCategories as $rs)
                            <li>
                                <div class="container">
                                    <div class="mega-menu-content clearfix">
                                        <div class="tab">
                                            <button class="tablinks active" onclick="openCategory(event, 'cat01')">{{$rs->title}}</button>
                                            <a href="tech-single.html" title="">
                                                <img src="{{Storage::url($rs->image)}}" stlye="height:150px; " alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                </div><!-- end hover -->
                                                <span class="menucat">{{$rs->title}}</span>
                                            </a>
                                        </div>

                                        <div class="tab-details clearfix">

                                            <div id="cat01" class="tabcontent active">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="blog-box">

                                                            <div class="post-media">
                                                                @if(count($rs->children))
                                                                    @include('home.categorytree', ['children' => $rs->children] )
                                                                @endif
                                                                <a href="tech-single.html" title="">
                                                                    <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
                                                                    <div class="hovereffect">
                                                                    </div><!-- end hover -->
                                                                    <span class="menucat">{{$rs->title}}</span>
                                                                </a>
                                                            </div><!-- end media -->
                                                        </div><!-- end blog-box -->
                                                    </div>

                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="blog-box">
                                                            <div class="post-media">
                                                                <a href="tech-single.html" title="">
                                                                    <img src="upload/tech_menu_04.jpg" alt="" class="img-fluid">
                                                                    <div class="hovereffect">
                                                                    </div><!-- end hover -->
                                                                    <span class="menucat">Science</span>
                                                                </a>
                                                            </div><!-- end media -->
                                                        </div><!-- end blog-box -->
                                                    </div>
                                                </div><!-- end row -->
                                            </div>
                                        </div><!-- end tab-details -->

                                    </div><!-- end mega-menu-content -->
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="tech-category-01.html">Gadgets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tech-category-02.html">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tech-category-03.html">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tech-contact.html">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-rss"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-android"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-apple"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->
