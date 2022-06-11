@extends('layouts.adminbase')

@section('title', 'Comment & Reviews List')
@section('head')
        <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">

                <div class="col-md-12">
                    <div class="col-md-6">
                        <!--    Bordered Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Comment List
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Game</th>
                                            <th>Name</th>
                                            <th>Subject</th>
                                            <th>Reviews</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th>Show</th>
                                            <th>Delete</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $rs)
                                        <tr>
                                            <td>{{$rs -> id}}</td>
                                            <td><a href="{{route('admin.game.show',['id'=>$rs ->game_id] )}}">{{$rs ->game->title}}</a>
                                            <td>{{$rs ->user->name}}</td>
                                            <td>{{$rs -> subject}}</td>
                                            <td>{{$rs -> review}}</td>
                                            <td>{{$rs -> rate}}</td>
                                            <td>{{$rs -> status}}</td>

                                            <td><a onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')" href="{{route('admin.comment.show',['id'=>$rs -> id])}}"class="btn btn-info">Show</a></td>
                                            <td><a onclick="return confirm('Are you sure?')" href="{{route('admin.comment.destroy',['id'=>$rs -> id])}}"class="btn btn-danger">Delete</a>
                                            </td>

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
