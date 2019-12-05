@extends('admin.layout.index')


@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
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
                                <th>Tiêu đề</th>
                                <th>Tóm tắt</th>
                                <th>Thể loại</th>
                                <th>Loại tin</th>
                                <th>số lượt xem</th>
                                <th>Nổi bật</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($TinTuc as $tt)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $tt->id }}</td>
                                <td><a  target="_blank" href="{{ asset('') }}tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html">{{ $tt->tieude }}<br>
                                    <img width="100px" src="upload/tintuc/{{ $tt->hinh }}" />
                                </a></td>
                                <td>{{ $tt->tomtat }}</td>
                                <td>{{ $tt->loaitin->theloai->ten }}</td>
                                <td>{{ $tt->loaitin->ten }}</td>
                                <td>{{ $tt->soluotxem }}</td>
                                 <td>
                                    @if( $tt->noibat ==0 ){{ 'không' }}
                                    @else{{ 'có' }} 
                                    @endif


                                 </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a 
                                onclick="return confirm('Bạn muốn xóa tin này?')"
                                 href="admin/tintuc/xoa/{{ $tt->id }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/sua/{{ $tt->id }}">Edit</a></td>
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