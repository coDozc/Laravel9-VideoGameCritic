@extends('layouts.adminbase')

@section('title', 'Settings')
@section('head')

@endsection

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Tabs
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Home</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Profile</a>
                            </li>
                            <li class=""><a href="#social" data-toggle="tab">Social Media</a>
                            </li>
                            <li class=""><a href="#aboutus2" data-toggle="tab">About us</a>
                            </li>
                            <li class=""><a href="#contact2" data-toggle="tab">Contact Page</a>
                            </li>
                            <li class=""><a href="#references2" data-toggle="tab">References</a>
                            </li>
                        </ul>
                        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" name="title" value="{{$data->title}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="description" value="{{$data->description}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input class="form-control" type="text" name="company" value="{{$data->company}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="address" value="{{$data->address}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" type="text" name="phone" value="{{$data->phone}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" name="email" value="{{$data->email}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Icon upload</label>
                                    <div class="">
                                        <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" value="" name="icon">
                                            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;"></div>
                                            <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="icon"></span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="form-group">
                                    <label>Smtp Server</label>
                                    <input class="form-control" type="text" name="smtpserver" value="{{$data->smtpserver}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Smtp E-mail</label>
                                    <input class="form-control" type="text" name="smtpemail"  value="{{$data->smtpemail}}"placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Password</label>
                                    <input class="form-control" type="text" name="smtppassword"  value="{{$data->smtppassword}}"placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Port</label>
                                    <input class="form-control" type="text" name="smtpport" value="{{$data->smtpport}}" placeholder="keywords">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="social">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input class="form-control" type="text" name="facebook" value="{{$data->facebook}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input class="form-control" type="text" name="twitter" value="{{$data->twitter}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input class="form-control" type="text" name="youtube" value="{{$data->youtube}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input class="form-control" type="text" name="instagram" value="{{$data->instagram}}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input class="form-control" type="text" name="fax" value="{{$data->fax}}" placeholder="keywords">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="aboutus2">
                                <div class="form-group">
                                    <label>About us</label>
                                       <textarea id="aboutus" name="aboutus">{{ $data->aboutus }}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact2">
                                <div class="form-group">
                                    <label>Contact</label>
                                        <textarea  id="contact" name="contact">{{ $data->contact }}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="references2">
                                <div class="form-group">
                                    <label>References</label>
                                    <textarea name="references" id="references">{{ $data->references }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Setting</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

        </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();
        })
    </script>
@endsection
@endsection
