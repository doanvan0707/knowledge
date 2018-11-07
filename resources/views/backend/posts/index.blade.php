@extends('layouts.backend')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Basic Tables</h1>
            <p>Basic bootstrap tables</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <a href="{{ route('posts.create') }}" class="btn btn-light"><i class="fa fa-plus">Viết bài mới</i></a>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Tác giả</th>
                            <th>Chuyên mục</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        @foreach($posts as $key => $post)
                            <tbody>
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    <a href="" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection