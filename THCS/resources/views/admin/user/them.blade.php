 @extends('admin.layout.index')

 @section('content')
   <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thành viên
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        {{ thongbao_loi($errors) }}

                        @if(session('thongbao'))
                            <div class="alert alert-danger">
                                 {{ session('thongbao') }}   
                            </div>
                        @endif
                        <form action="admin/user/them" method="POST">
                             {!! csrf_field() !!}
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="txtten" placeholder="Nhập tên thành viên" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="txtemail" placeholder="Nhập Email" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="Password" name="txtpassword" placeholder="Nhập mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input class="form-control" type="Password" name="txtpasswordAg" placeholder="Nhập lại mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Quyền người dùng</label>
                                <label class="radio-inline">
                                    <input name="quyen" value="0" checked="" type="radio">Thường
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="1" type="radio">Admin
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
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