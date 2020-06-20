@extends('layouts.back_layout.design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>Posts</h1>
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
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"> <a href="{{route('posts.index')}}">Posts</a></li>
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
                    <h3 class="card-title">Create Posts form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" enctype="multipart/form-data" method="post" action="{{route('posts.store')}}">{{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="ch_name" class="form-control"  required placeholder="Enter ...">
                                </div>
                            </div>
                                    <div class="col-md-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Pastor's Message</label>
                                            <textarea class="textarea" placeholder="Place some text here" name="ch_pst_msg"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" name="ch_tel" class="form-control" required placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="ch_address" class="form-control" required placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Category</label>
                                    <select  required class="form-control" name="ch_leader">
                                        <?php echo $categories_dropdown ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Pastor's Message</label>
                                    <textarea class="textarea" placeholder="Place some text here" name="ch_pst_msg"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Church Page Content</label>
                                    <textarea class="textarea" placeholder="Place some text here" name="ch_desc"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Mission</label>
                                    <input type="text" name="ch_mission" class="form-control" required placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Vision</label>
                                    <input type="text" name="ch_vision" class="form-control" required placeholder="Enter ...">
                                </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Soccial Media Links</label>
                                    <input type="text" name="ch_links" class="form-control" required placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customFile">Church Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="ch_image" class="custom-file-input" id="ch_image">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
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
Your database has been setup. Use the following values:

Database:	itesxjpr_cec-web
Host:	localhost
Username:	itesxjpr_admin
Password:	7zlJs9qg3O
