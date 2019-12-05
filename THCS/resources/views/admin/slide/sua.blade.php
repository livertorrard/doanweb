@extends('admin.layout.index') 



@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide 
                            <small>Sửa {{ $Slide->ten }}</small>  
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    {{ thongbao_loi($errors) }}
                        @if(session('thongbao'))
                           <h2 class="alert alert-danger">
                                 {{ session('thongbao') }}   
                            </h2>
                        @endif
                        <form action="admin/slide/sua/{{ $Slide->id }}" method="POST" enctype="multipart/form-data">
                           {!! csrf_field() !!}  
                            <div class="form-group">
                                <label>Tên</label>
                                <textarea name="txtten" class="form-control" rows="3" placeholder="Nhập tên">{{ $Slide->ten }}</textarea>
                            </div>        
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea name="txtnoidung" id="demo" class="form-control ckeditor" rows="5" >{{ $Slide->noidung }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <textarea name="txtlink" class="form-control" rows="3" placeholder="Nhập link">{{ $Slide->link }}</textarea>
                            </div>     
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <p><img width="200px" src="upload/slide/{{ $Slide->hinh }}"></p>
                                <input type="file" name="txthinh" class="form-control" />
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