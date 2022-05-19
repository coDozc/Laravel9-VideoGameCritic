@extends('layouts.adminbase')

@section('title', 'Game List')
@section('head')
        <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <a href="{{route('admin.game.create')}}" class="btn btn-info" style="margin: 20px 15px 30px 30px ">Add Game</a>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <!--    Bordered Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Game List
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Genre</th>
                                            <th>Developer</th>
                                            <th>Hours</th>
                                        <!--<th>Description</th>-->
                                            <th>Image</th>
                                            <th>Image Gallery</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Show</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $rs)
                                        <tr>
                                            <td>{{$rs -> id}}</td>
                                            <td>{{App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                            <td>{{$rs -> title}}</td>
                                            <!--<td>{{$rs -> description}}</td>-->
                                            <td>{{$rs -> genre}}</td>
                                            <td>{{$rs -> developer}}</td>
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

                                            <td><a href="{{route('admin.game.edit',['id'=>$rs -> id])}}"class="btn btn-info">Edit</a></td>
                                            <td><a onclick="return confirm('Are you sure?')" href="{{route('admin.game.destroy',['id'=>$rs -> id])}}"class="btn btn-danger">Delete</a>
                                            </td>
                                            <td><a href="{{route('admin.game.show',['id'=>$rs -> id])}}"class="btn btn-success">Show</a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--  End  Bordered Table  -->
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        This is a free responsive admin under cc3.0 license, so you can use it for personal and commercial use.
                        <br />
                        Enjoy this admin and for more please keep looking <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
