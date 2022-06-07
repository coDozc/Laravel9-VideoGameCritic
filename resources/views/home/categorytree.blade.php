@foreach($children as $subcategory)
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
        <div class="blog-box">
            @if(count($subcategory->children))
            <div class="post-media">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="tech-single.html" title="">
                                <img src="{{Storage::url($subcategory->image)}}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                </div><!-- end hover -->
                                <span class="menucat">{{$subcategory->title}}</span>
                                @include('home.categorytree',['children'=> $subcategory->children])
                            </a>
                        </div><!-- end media -->
                    </div><!-- end blog-box -->
                </div>
            </div>
            @else
                <div class="post-media> ">
                    <a href="{{route('categorygames', ['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
                </div>
            @endif
        </div><!-- end blog-box -->
    </div>
@endforeach
