@extends('layouts.adminbase')

@section('title', 'Add Category')


@section('content')
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <div id="page-wrapper">
        <div class="panel panel-info">
            <div class="panel-heading">
                CATEGORY ELEMENTS
            </div>
            <div class="panel-body">
                <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        <label>Parent Category</label>

                        <select class="form-control select2" name="parent_id">
                            <option value="0" selected="selected">Main Category</option>
                            @foreach($data as $rs)
                                <option value="{{$rs->id}}" > {{App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>


                        <label>Title</label>
                        <input class="form-control" type="text" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <input class="form-control" type="text" name="keywords" placeholder="keywords">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input class="form-control" type="text" name="description" placeholder="description">
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Image Upload</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" value="" name="image">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="image"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-info">Save</button>

                </form>
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
