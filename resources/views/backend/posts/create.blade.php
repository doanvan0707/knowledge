@extends('layouts.backend')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <h3>Thêm bài viết</h3>
                        <input type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <textarea name="txtContent" class="form-control " id="editor1"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <h3>Mô tả</h3>
                        <textarea name="" id="" cols="30" rows="10" ></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <a href="" class="btn btn-primary">Đăng</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <a href="" class="btn btn-primary">Chuyên mục</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <a href="" class="btn btn-primary">Hình đại diện</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
