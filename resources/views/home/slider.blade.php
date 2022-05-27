<body>
<div class="home-slider owl-carousel js-fullheight owl-loaded owl-drag" style="height: 700px;">

    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-3840px, 0px, 0px); transition: all 0s ease 0s; width: 13440px;">
            @foreach($sliderdata as $rs)
            <div class="owl-item cloned" style="width: 1920px; align-items: center; ">
                <div class="slider-item js-fullheight" style="background-image: url('{{Storage::url($rs->image)}}'); height: 1920px; width: 1080px;">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" style="height: 700px;">
                            <div class="col-md-12 ftco-animate">
                                <div class="text w-100 text-center">
                                    <h2>{{$rs->description}}</h2>
                                    <h1 class="mb-3">{{$rs->title}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev">
            <span class="ion-ios-arrow-back"></span></button><button type="button" role="presentation" class="owl-next"><span class="ion-ios-arrow-forward"></span></button>
    </div>
    <div class="owl-dots"><button role="button" class="owl-dot active"><span></span>
        </button>
        <button role="button" class="owl-dot"><span></span>
        </button>
        <button role="button" class="owl-dot"><span></span>
        </button>
    </div>
</div>



</body>
