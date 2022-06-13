@extends('layouts.adminwindow')

@section('title', 'Game Image Gallery')

@section('content')
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
<h2>{{$game->title}}</h2>
    <form role="form" action="{{route('userpanel.imagestore', ['gid'=>$game->id])}}" method="post" enctype="multipart/form-data">
        @csrf
            <label>Title</label>
            <input class="form-control" type="text" name="title" placeholder="Title">

        <div class="form-group">
            <label class="control-label col-lg-4">Image Upload</label>
            <div class="">
                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden"  name="image">
                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;"></div>
                    <div>

                        <span class="btn btn-file btn-success"><input type="file" name="image"><span class="fileupload-new">Select image</span>
                            <span class="fileupload-exists">Change</span>
                            </span>
                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-group-append">
            <button type="submit" class="btn btn-info">Upload</button>
        </div>
    </form>
                            <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive table-bordered">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <!--<th>Description</th>-->
                    <th>Image</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $images as $rs )
                    <tr>
                        <td>{{$rs -> id}}</td>
                        <td>{{$rs -> title}}</td>

                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height: 60px">
                            @endif
                        </td>

                        <td><a href="{{route('userpanel.imagedestroy',['gid'=>$game -> id, 'id'=>$rs -> id])}}"class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>






@endsection
