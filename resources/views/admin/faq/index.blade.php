@extends('layouts.adminbase')

@section('title', 'Faq List')
@section('head')
        <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <a href="{{route('admin.faq.create')}}" class="btn btn-info" style="margin: 20px 15px 30px 30px ">Add Faq</a>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <!--    Bordered Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                FAQ List
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Question</th>
                                            <th>Answer</th>
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
                                            <td>{{$rs -> question}}</td>
                                            <td>{!! $rs -> answer !!}</td>
                                            <td>{{$rs -> status}}</td>

                                            <td><a href="{{route('admin.faq.edit',['id'=>$rs -> id])}}"class="btn btn-info">Edit</a></td>
                                            <td><a onclick="return confirm('Are you sure?')" href="{{route('admin.faq.destroy',['id'=>$rs -> id])}}"class="btn btn-danger">Delete</a>
                                            </td>
                                            <td><a href="{{route('admin.faq.show',['id'=>$rs -> id])}}"class="btn btn-success">Show</a></td>
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
