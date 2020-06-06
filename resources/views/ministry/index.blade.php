@extends('layouts.back_layout.design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Churches</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Churches</li>
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
                <a class="card-title btn btn-success text-center"  href="{{ route('ministries.create') }}">Add</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Address</th>                   
                    <th>Description</th>
                    <th>Mission</th>
                    <th>Vision</th>
                    <th>Objectives</th>
                    <th>Emblem</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($ministries as $ministry)
                    <tr>
                        <td class="text-center">{{ $ministry->id }}</td>
                        <td class="text-center">{{$ministry->name}}</td>
                        <td class="text-center">{{ $ministry->email }}</td>
                        <td class="text-center">{{$ministry->tel}}</td>
                       <td class="text-center">{{ $ministry->address }}</td>
                        <td class="text-center">{!! $ministry->description !!}</td>
                        <td class="text-center">{{$ministry->mission}}</td>
                    <td class="text-center">{{$ministry->vision}}</td>
                    <td class="text-center">{!! $ministry->objectives !!}</td>
                    <td class="text-center"><img src="{{ asset('/images/webimgs/ministries/uploads/'.$ministry->emblem) }}"/></td>
                        <td><a href="{{ route('ministries.edit', [$ministry->id]) }}" class="btn btn-warning btn-sm">Edit <i class="icon icon-edit"></i></a> | 
                            <a rel="{{$ministry->id}}" rel1="destroy" href="javascript:" class="btn btn-danger btn-sm deleteMinistry">Delete <i class="icon icon-trash"></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Address</th>                   
                    <th>Description</th>
                    <th>Mission</th>
                    <th>Vision</th>
                    <th>Objectives</th>
                    <th>Emblem</th>
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