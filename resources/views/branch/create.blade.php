@extends('layouts.back_layout.design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
<<<<<<< HEAD
                <div class="col-md-6">
=======
                <div class="col-sm-6">
>>>>>>> a1e83c677355f459c91f73aad871022140866511
                    <h1>Churches</h1>
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
<<<<<<< HEAD
                <div class="col-md-6">
=======
                <div class="col-sm-6">
>>>>>>> a1e83c677355f459c91f73aad871022140866511
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"> <a href="{{route('branches.index')}}">Churches</a></li>
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
                    <h3 class="card-title">Create Churches form</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" enctype="multipart/form-data" method="post" action="{{route('branches.store')}}">{{ csrf_field() }}
                        <div class="row">
<<<<<<< HEAD
                            <div class="col-md-6">
=======
                            <div class="col-sm-6">
>>>>>>> a1e83c677355f459c91f73aad871022140866511
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="ch_name" class="form-control"  required placeholder="Enter ...">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="ch_mail" class="form-control" required placeholder="Enter ...">
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
                                    <label>Head Pastor</label>
                                    <select  required class="form-control" name="ch_leader">
=======
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Head Pastor</label>
                                    <select name="leader"  required class="form-control">
>>>>>>> a1e83c677355f459c91f73aad871022140866511
                                        <?php echo $leaders_dropdown ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
<<<<<<< HEAD
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
=======
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="ch_mail" class="form-control" required placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" name="ch_tel" class="form-control" required placeholder="Enter ...">
>>>>>>> a1e83c677355f459c91f73aad871022140866511
                                </div>
                            </div>
                        </div>
                        <div class="row">
<<<<<<< HEAD
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
=======
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="ch_address" class="form-control" required placeholder="Enter ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Church Page Content</label>
                                    <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="customFile">Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="p_image" class="custom-file-input" id="p_image">
>>>>>>> a1e83c677355f459c91f73aad871022140866511
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
<<<<<<< HEAD
                            <div class="col-md-6">
=======
                            <div class="col-sm-6">
>>>>>>> a1e83c677355f459c91f73aad871022140866511
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