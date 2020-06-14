@extends('layouts.back_layout.design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
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
                <a class="card-title btn btn-success text-center"  href="{{ route('posts.create') }}">Create</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>content</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>slug</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td class="text-center">{{ $post->id }}</td>
                        <td class="text-center">{{$post->title}}</td>
                        <td class="text-center">{!!$post->content!!}</td>
                        <td class="text-center"><img src="{{ asset('/images/webimgs/posts/small/'.$post->image) }}" /></td>
                       <td class="text-center">{{ $post->author }}</td>
                    <td class="text-center">{{$post->slug}}</td>
                       <td class="text-center">
                        @foreach($categories as $category)
                        @if ($post->category == $category->id)
                        {{ $category->title}}    
                        @endif
                        @endforeach
                      </td>
                        <td class="text-center">{{$post->created_at}}</td>
                        <td><a href="{{ route('posts.edit', [$post->id]) }}" class="btn btn-warning btn-sm">Edit <i class="icon icon-edit"></i></a> | 
                            <a rel="{{$post->id}}" rel1="destroy" href="javascript:" class="btn btn-danger btn-sm deletePost">Delete <i class="icon icon-trash"></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>content</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Slug</th>
                    <th>Category</th>
                    <th>Date</th>
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