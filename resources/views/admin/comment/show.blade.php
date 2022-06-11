@extends('layouts.adminwindow')

@section('title', 'Show Message: {{$data->title}}')


@section('content')
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <div id="page-wrapper">
        <div class="panel panel-info">
            <div class="panel-heading">
                Edit Message: {{$data->title}}
            </div>
            <div class="col-md-6">
                <!--    Context Classes  -->
                <div class="panel panel-default">
                     <div class="panel-heading">
                        Details Message Data
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">

                                <tr>
                                    <th style="width: 150px" >Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Game</th>
                                    <td>{{$data->game->title}}</td>
                                </tr>

                                <tr>
                                    <th style="width: 30px" >Name & Surname</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>

                                <tr>
                                    <th style="width: 30px" >Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Message</th>
                                    <td>{{$data->review}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Rate</th>
                                    <td>{{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Ip Number</th>
                                    <td>{{$data->IP}}</td>
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
                                <tr>
                                    <th style="width: 30px" >Admin Note : </th>
                                    <td>
                                        <form role="form" action="{{route('admin.comment.update' , ['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Update Comment </button>
                                            </div>
                                        </form>
                                    </td>
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
