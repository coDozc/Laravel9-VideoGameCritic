@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Category List</h1>

                    <div class="col-md-6">
                        <!--    Bordered Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Category List
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Keywords</th>
                                            <th>Description</th>
                                            <th>Image</th>
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
                                            <td>{{$rs -> title}}</td>
                                            <td>{{$rs -> keywords}}</td>
                                            <td>{{$rs -> description}}</td>
                                            <td>{{$rs -> image}}</td>
                                            <td>{{$rs -> status}}</td>
                                            <td><a href="/admin/category/edit{{$rs -> id}}"class="btn btn-info">Edit</a></td>
                                            <td><a href="/admin/category/delete{{$rs -> id}}"class="btn btn-danger">Delete</a></td>
                                            <td><a href="/admin/category/{{$rs -> id}}"class="btn btn-success">Show</a></td>
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
