@extends('admin.layout.index')


@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    {{ thongbao_loi($errors) }}
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
                                <th>Nội dung</th>
                                <th>Hình</th>
                                <th>Link</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Slide as $sd)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $sd->id }}</td>
                                <td>{{ $sd->ten }}</td>
                                <td>{{ $sd->noidung }}</td>
                                <td><img width="200px" src="upload/slide/{{ $sd->hinh }}" /> </td>
                                <td>{{ $sd->link }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                onclick="return confirm('Bạn muốn xóa slide này?')"
                                 href="admin/slide/xoa/{{ $sd->id }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/slide/sua/{{ $sd->id }}">Sửa</a></td>
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