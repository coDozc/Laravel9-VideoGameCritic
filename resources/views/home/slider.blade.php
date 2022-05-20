<div class="container-xl">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @foreach($sliderdata as $rs)
                            <div class="col-sm-4">
                                <div class="thumb-wrapper">
                                    <a href="#">
                                    <div class="img-box">
                                        <img src="{{Storage::url($rs->image)}}" class="img-fluid" style="height: 260px; width: 260px">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>{{$rs->title}}</h4>
                                        <p>{{$rs->title}}</p>
                                        <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
