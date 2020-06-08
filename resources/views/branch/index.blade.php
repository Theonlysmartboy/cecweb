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
                <a class="card-title btn btn-success text-center"  href="{{ route('branches.create') }}">Add</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
<<<<<<< HEAD
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Address</th>
                    <th>Head Pastor</th>
                    <th>Description</th>
                    <th>Mission</th>
                    <th>Vision</th>
=======
                    <th>Head Pastor</th>
                    <th>Description</th>
                    <th>Email</th>
                    <th>Address</th>
>>>>>>> a1e83c677355f459c91f73aad871022140866511
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($churches as $branch)
                    <tr>
                        <td class="text-center">{{ $branch->id }}</td>
                        <td class="text-center">{{$branch->name}}</td>
<<<<<<< HEAD
                        <td class="text-center">{{ $branch->email }}</td>
                        <td class="text-center">{{$branch->tel}}</td>
                       <td class="text-center">{{ $branch->address }}</td>
                       <td class="text-center">
                        @foreach($head_pastors as $head_pastor)
                        @if ($branch->leader == $head_pastor->id)
                        {{ $head_pastor->title. " ". $head_pastor->name }}  
                        </td>  
                        @endif
                        @endforeach
                        <td class="text-center">{!! $branch->description !!}</td>
                        <td class="text-center">{{$branch->mission}}</td>
                    <td class="text-center">{{$branch->vision}}</td>
                        <td><a href="{{ route('branches.edit', [$branch->id]) }}" class="btn btn-warning btn-sm">Edit <i class="icon icon-edit"></i></a> | 
                            <a rel="{{$branch->id}}" rel1="destroy" href="javascript:" class="btn btn-danger btn-sm deleteBranch">Delete <i class="icon icon-trash"></i></a></td>
=======
                        <td class="text-center">{{ $branch->leader }}</td>
                        <td class="text-center">{{ $branch->description }}</td>
                        <td class="text-center">{{ $branch->email }}</td>
                       <td class="text-center">{{ $branch->address }}</td>
                        <td><a href="{{url('admin/user/edit/'.$branch->id)}}" class="btn btn-warning btn-sm">Edit <i class="icon icon-edit"></i></a> | 
                            <a rel="{{$branch->id}}" rel1="delete" href="javascript:" class="btn btn-danger btn-sm deleteUser">Delete <i class="icon icon-trash"></i></a></td>
>>>>>>> a1e83c677355f459c91f73aad871022140866511
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
<<<<<<< HEAD
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Address</th>
                    <th>Head Pastor</th>
                    <th>Description</th>
                    <th>Mission</th>
                    <th>Vision</th>
=======
                    <th>Head Pastor</th>
                    <th>Description</th>
                    <th>Email</th>
                    <th>Address</th>
>>>>>>> a1e83c677355f459c91f73aad871022140866511
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