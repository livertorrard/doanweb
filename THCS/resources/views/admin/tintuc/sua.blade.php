@extends('admin.layout.index') 



@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
                            <small>{{ $TinTuc->tieude }}</small>
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
                        <form action="admin/tintuc/sua/{{ $TinTuc->id }}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" name="txttheloai" id="TheLoai1">
                                    @foreach($TheLoai as $tl)
                                    <option 
                                    @if($TinTuc->loaitin->theloai->id == $tl->id)
                                        {{ "selected" }}
                                    @endif

                                    value="{{ $tl->id }}">{{ $tl->ten }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Loại tin</label>
                                <select class="form-control" name="txtloaitin" id="LoaiTin1">
                                    @foreach($LoaiTin as $lt)
                                    <option 
                                    @if($TinTuc->loaitin->id == $lt->id) {{ "selected" }}
                                    @endif
                                    value="{{ $lt->id }}">{{ $lt->ten }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" value="{{ $TinTuc->tieude }}" name="txttieude" placeholder="Nhập tiêu đề" />
                            </div>
                            <div class="form-group">
                                <label>tóm tắt</label>
                                <textarea name="txttomtat"  class="form-control" rows="3">{{ $TinTuc->tomtat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea name="txtnoidung"  id="editor1" class="form-control ckeditor" rows="5">{{$TinTuc->noidung }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <p><img width="400px"; src="upload/tintuc/{{ $TinTuc->hinh }}"/><p>
                                <input type="file" name="txthinh" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Nổi bật</label>
                                <label class="radio-inline">
                                    <input 
                                    @if($TinTuc->noibat == 0) {{ "Checked" }}
                                    @endif
                                    name="txtnoibat" value="0"  type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input
                                    @if($TinTuc->noibat == 1) {{ "Checked" }}
                                    @endif
                                     name="txtnoibat" value="1" type="radio">Có
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->            
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Người dùng</th>
                                <th>Nội dung</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($TinTuc->comment as $cm)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $cm->id }}</td>
                                <td>{{ $cm->user->name }}</td>
                                <td>{{ $cm->noidung }}</td>
                                <td>{{ $cm->created_at }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/{{ $cm->id }}/{{ $TinTuc->id }}"> Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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