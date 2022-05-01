@extends('layouts.adminbase')

@section('title', 'Show Category: {{$data->title}}')


@section('content')
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <div id="page-wrapper">
        <div class="panel panel-info">
            <div class="panel-heading">
                Edit Category: {{$data->title}}
            </div>
            <div class="col-md-6">
                <!--    Context Classes  -->
                <div class="panel panel-default">
                    <a href="{{route('admin.category.edit',['id'=>$data -> id])}}" class="btn btn-info" style="margin: 20px 15px 30px 30px ">Edit</a>
                    <a href="{{route('admin.category.destroy',['id'=>$data -> id])}}" class="btn btn-info" style="margin: 20px 15px 30px 30px ">Delete</a>
                    <div class="panel-heading">
                        Details
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">

                                <tr>
                                    <th style="width: 150px" >Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Image</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--  end  Context Classes  -->
            </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
