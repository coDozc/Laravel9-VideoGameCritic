@extends('layouts.adminbase')

@section('title', 'Edit FAQ :{{$data->title}}')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <div id="page-wrapper">
        <div class="panel panel-info">
            <div class="panel-heading">
                Edit FAQ: {{$data->title}}
            </div>
            <div class="panel-body">
                <form role="form" action="{{route('admin.faq.update',['id'=>$data -> id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        <label>Question</label>
                        <input class="form-control" type="text" name="question" value="{{$data->question}}" placeholder="Question">
                    </div>

                    <div class="form-group">
                        <label>Answer</label>
                        <textarea class="form-control"  name="answer" id="answer" >
                            {!!$data->answer!!}
                        </textarea>
                        <body>
                        <div id="editor">This is some sample content.</div>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#answer' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                        </body>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-info">Update Data</button>

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
    @section('foot')
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(function () {
                $('. textarea').summernote()
            })
        </script>
    @endsection
@endsection
