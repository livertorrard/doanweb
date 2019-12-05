 @extends('admin.layout.index')

 @section('content')
   <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
                        {{ thongbao_loi($errors) }}

                        @if(session('thongbao'))
                            <div class="alert alert-danger">
                                 {{ session('thongbao') }}   
                            </div>
                        @endif
                        <form action="" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" name="txttheloai" id="TheLoai1">
                                    @foreach($TheLoai as $tl)
                                    <option value="{{ $tl->id }}">{{ $tl->ten }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Loại tin</label>
                                <select class="form-control" name="txtloaitin" id="LoaiTin1">
                                    @foreach($LoaiTin as $lt)
                                    <option value="{{ $lt->id }}">{{ $lt->ten }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="txttieude" placeholder="Nhập tiêu đề" />
                            </div>
                            <div class="form-group">
                                <label>tóm tắt</label>
                                <textarea name="txttomtat" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea name="txtnoidung" id="editor1" class="form-control" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="txthinh" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Nổi bật</label>
                                <label class="radio-inline">
                                    <input name="txtnoibat" value="0" checked="" type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input name="txtnoibat" value="1" type="radio">Có
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    <!-- /#page-wrapper -->

 @endsection

 @section('script')
    <script>
        $(document).ready(function(){
            $("#TheLoai1").change(function(){
               var id_theloai = $(this).val();
               // alert(id_theloai);
               $.get("admin/ajax/loaitin/"+id_theloai,function(data){

                 $("#LoaiTin1").html(data);
               })
            });
        });
    </script>

 @endsection