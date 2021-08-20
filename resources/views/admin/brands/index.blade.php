@extends('admin.layouts.master')
@section('title', 'لیست برندها')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">لیست برندها</h4>
                <div class="box-controls pull-right">
                    <div class="lookup lookup-circle lookup-right">
                        <input type="text" name="s">
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>ردیف</th>
                            <th>عنوان</th>
                            <th>تصویر</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        @foreach($brands as $key => $brand)
                            <tr>
                                <td>{{$brands->firstItem() + $key}}</td>
                                <td>{{$brand->title}}</td>
                                <td><img src="{{str_replace('public', '/storage', $brand->image)}}" width="50px" height="50px"></td>
                                <td><a href="{{route('brands.edit', ['brand' => $brand->title])}}"><img src="/admin/images/edit-delete/edit.png" style="width: 25px"></a></td>
                                <td>
                                    <form action="{{route('brands.destroy', ['brand' => $brand->title])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="image" src="/admin/images/edit-delete/delete.png" style="width: 25px">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{$brands->links()}}
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@endsection
