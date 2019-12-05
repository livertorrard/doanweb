@extends('admin.layout.index') 



@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thành viên
                            <small>{{ $User->name }}</small>
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
                        <form action="admin/user/sua/{{ $User->id }}" method="POST">
                             {!! csrf_field() !!}
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="txtten" value="{{ $User->name }}" placeholder="Nhập tên thành viên" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="txtemail" value="{{ $User->email }}" placeholder="Nhập Email" readonly="" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="changePassword" name="changePassword">
                                <label>Đổi mật khẩu</label>
                                <input class="form-control pass_check" type="Password"  name="txtpassword" placeholder="Nhập mật khẩu" disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input class="form-control pass_check" type="Password" name="txtpasswordAg" placeholder="Nhập lại mật khẩu" disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Quyền người dùng</label>
                                <label class="radio-inline">
                                    <input
                                    @if ($User->level==0)
                                        {{ "checked" }}
                                    @endif
                                     name="quyen" value="0" checked="" type="radio">Thường
                                </label>
                                <label class="radio-inline">
                                    <input
                                     @if ($User->level==1)
                                        {{ "checked" }}
                                    @endif
                                     name="quyen" value="1" type="radio">Admin
                                </label>
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

@section('script')
    <script>
        $(document).ready(function(){
            $("#changePassword").change(function(){
                if($(this).is(":checked")){
                    $(".pass_check").removeAttr('disabled');
                }else{
                    $(".pass_check").attr('disabled','');
                }
            });
        });
    </script>
@endsection