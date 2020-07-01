@extends('layouts.back_layout.design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Messages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Messages</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a class="card-title btn btn-success text-center"  href="{{ route('message.create') }}">Add</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Avatar</th>
                    <th>Transcribed Message</th>
                    <th>Video Message</th>
                    <th>Visibility</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($messages as $message)
                    <tr>
                        <td class="text-center">{{ $message->id }}</td>
                        <td class="text-center">{{$message->title." " .$message->name}}</td>
                        <td class="text-center"><img src="{{ asset('/images/webimgs/pastors/uploads/small/'.$message->avatar) }}"/></td>
                        <td class="text-center">{{$message->text_message}}</td>
                       <td class="text-center">{{ $message->video_message }}</td>
                       <td class="text-center">
                        @if ($message->status == 1)
                            Visible
                        @else
                            Hidden
                        @endif 
                        </td>  
                        <td><a href="{{ route('message.edit', [$message->id]) }}" class="btn btn-warning btn-sm">Edit <i class="icon icon-edit"></i></a> | 
                            <a rel="{{$message->id}}" rel1="destroy" href="javascript:" class="btn btn-danger btn-sm deleteMessage">Delete <i class="icon icon-trash"></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Avatar</th>
                    <th>Transcribed Message</th>
                    <th>Video Message</th>
                    <th>Visibility</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection