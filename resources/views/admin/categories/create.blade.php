@extends('admin.layouts.master')
@section('title', 'ایجاد دسته بندی جدید')
@section('content')
    <!-- Basic Forms -->
    <div class="box">
        <div class="box-body">
            <div class="row">
                <div class="col">
                    <form novalidate action="{{route('categories.store')}}" method=post>
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>عنوان دسته بندی</h5>
                                    <div class="controls">
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>والد</h5>
                                    <div class="controls">
                                        <select name="parent" class="form-control form-control @error('parent') is-invalid @enderror">
                                            <option value="" disabled selected>لطفا والد را انتخاب کنید</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{(old('parent') == $category->id) ? 'selected' : ''}}>{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-info">ذخیره</button>
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
