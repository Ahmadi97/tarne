@extends('admin.layouts.master')
@section('title')
    ویرایش {{$brand->title}}
@endsection
@section('content')
    <!-- Basic Forms -->
    <div class="box">
        <div class="box-body">
            <div class="row">
                <div class="col">
                    <form novalidate action="{{route('brands.update', ['brand' => $brand->title])}}" method=post enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>عنوان برند</h5>
                                    <div class="controls">
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$brand->title}}" >
                                    </div>
                                    <div class="form-group">
                                        <h5>انتخاب تصویر برند</h5>
                                        <div class="controls">
                                            <img src="{{str_replace('public', '/storage', $brand->image)}}" width="50px" height="50px">
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                            <button type="submit" class="btn btn-info">ذخیره</button>
                        </div>
                        </div>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
