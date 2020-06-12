@extends('layouts.back_layout.design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
<<<<<<< HEAD
                    <h1>Categories</h1>
=======
                    <h1>Leaders</h1>
>>>>>>> bf789bef65ec8a20554cf3a825562c1c5f8e8f1b
                    @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger alert-block" id="autoClose" >
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <em class="text-warning">{!!session('flash_message_error')!!}</em>
                    </div>
                    @endif
                    @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block" id="autoClose" >
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <em class="text-primary">{!!session('flash_message_success')!!}</em>
                    </div>
                    @endif
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
<<<<<<< HEAD
                        <li class="breadcrumb-item"> <a href="{{route('categories.index')}}">Categories</a></li>
=======
                        <li class="breadcrumb-item"> <a href="{{route('leaders.index')}}">Leaders</a></li>
>>>>>>> bf789bef65ec8a20554cf3a825562c1c5f8e8f1b
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">                         
            <!-- Center column -->               
            <!-- general form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
<<<<<<< HEAD
                    <h3 class="card-title text-center">Create Categories form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" enctype="multipart/form-data" method="post" action="{{route('categories.store')}}">{{ csrf_field() }}
=======
                    <h3 class="card-title text-center">Create Leaders form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" enctype="multipart/form-data" method="post" action="{{route('leaders.store')}}">{{ csrf_field() }}
>>>>>>> bf789bef65ec8a20554cf3a825562c1c5f8e8f1b
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Title</label>
<<<<<<< HEAD
                                    <input type="text" name="c_title" class="form-control"  required placeholder="Enter ...">
=======
                                    <input type="text" name="l_title" class="form-control"  required placeholder="Enter ...">
>>>>>>> bf789bef65ec8a20554cf3a825562c1c5f8e8f1b
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
<<<<<<< HEAD
                                    <label>Description</label>
                                    <textarea class="textarea" placeholder="Place some text here" name="c_desc"
=======
                                    <label>Name</label>
                                    <input type="text" name="l_name" class="form-control"  required placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="customFile">Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="l_image" class="custom-file-input" id="p_image">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="l_mail" class="form-control" required placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" name="l_tel" class="form-control" required placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="l_address" class="form-control" required placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Biography</label>
                                    <textarea class="textarea" placeholder="Place some text here" name="l_bio"
>>>>>>> bf789bef65ec8a20554cf3a825562c1c5f8e8f1b
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
<<<<<<< HEAD
=======
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Soccial Media links</label>
                                    <input type="text" name="l_media" class="form-control" placeholder="Enter the links separated by comas">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
>>>>>>> bf789bef65ec8a20554cf3a825562c1c5f8e8f1b
                                <input type="submit" class="btn btn-success btn-md" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection