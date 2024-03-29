
@extends('layouts.frontbase')

@section('title', 'My Games' )


@section('content')
    <div class="page-title lb single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-envelope-open-o bg-orange"></i> USER <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">User Games</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-lg-5">
                                <strong>User Menu</strong>
                                @include('home.user.usermenu')
                            </div>
                            <div class="col-lg-7">
                                <strong>MY Games</strong>
                                <a href="{{route('userpanel.gamecreate')}}" class="btn btn-info" style="margin: 20px 15px 30px 30px ">Add Game</a>
                                <div class="panel-body">
                                    <div class="table-responsive table-bordered">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Hours</th>
                                                <!--<th>Description</th>-->
                                                <th>Image</th>
                                                <th>Image Gallery</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($game as $rs)
                                                <tr>
                                                    <td>{{$rs -> id}}</td>
                                                    <td>{{App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                    <td>{{$rs -> title}}</td>
                                                <!--<td>{{$rs -> description}}</td>-->
                                                    <td>{{$rs -> date}}</td>
                                                    <td>{{$rs -> hours}}</td>
                                                    <td>
                                                        @if($rs->image)
                                                            <img src="{{Storage::url($rs->image)}}" style="height: 60px">
                                                        @endif
                                                    </td>
                                                    <td><a href="{{route('admin.image.index',['gid'=>$rs -> id])}}"
                                                           onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')">

                                                            <img src="{{asset('assets')}}/public/images/red-dead-redemption-2-pc-hero-banner-basekeepers%20(1).jpg" style="height: 60px">
                                                        </a>
                                                    </td>

                                                    <td>{{$rs -> status}}</td>

                                                    <td><a href="{{route('userpanel.gameedit',['id'=>$rs -> id])}}"class="btn btn-info">Edit</a></td>
                                                   <td><a onclick="return confirm('Are you sure?')" href="{{route('userpanel.gamedestroy',['id'=>$rs -> id])}}"class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
