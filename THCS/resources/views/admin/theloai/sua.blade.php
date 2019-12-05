@extends('admin.layout.index') 



@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
                            <small>{{ $theloai->ten }}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if (count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $loi)
                                    {{ $loi }} <br>
                                @endforeach
                              </div>
                        @endif

                        @if(session('thongbao'))
                           <div class="alert alert-danger">
                                 {{ session('thongbao') }}   
                            </div>
                        @endif
                        <form action="admin/theloai/sua/{{ $theloai->id }}" method="POST">
                                {!! csrf_field() !!}
                            <div class="form-group">
                                <label>Tên thể loại</label>
                                <input class="form-control" name="txtten" value="{{ $theloai->ten }}" placeholder="Điền tên thể loại" />
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection