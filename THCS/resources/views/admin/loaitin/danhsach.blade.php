@extends('admin.layout.index')


@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Tin
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                        @if(session('thongbao'))
                           <div class="alert alert-danger">
                                 {{ session('thongbao') }}   
                            </div>
                        @endif
                        </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Tên không dấu</th>
                                <th>Thể loại</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($LoaiTin as $lt)
                            <tr class="odd gradeX" align="center">
                               

                                <td>{{ $lt->id }}</td>
                                <td>{{ $lt->ten }}</td>
                                <td>{{ $lt->tenkhongdau }}</td>
                                 <td>{{ $lt->theloai->ten }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                onclick="return confirm('Bạn muốn xóa loại tin này?')"
                                 href="admin/loaitin/xoa/{{ $lt->id }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaitin/sua/{{ $lt->id }}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
               {{--      {{ $LoaiTin->links() }} --}}
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection