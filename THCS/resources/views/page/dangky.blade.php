 @extends('layout.layout_page')
  @section('content')
   <!-- Page Content -->

        <div class="col-md-6" style="padding-bottom:120px">
                        <h1 class="page-header">Đăng kí thành viên</h1>
                        {{ thongbao_loi($errors) }}

                        @if(session('thongbao'))
                            <div class="alert alert-danger">
                                 {{ session('thongbao') }}   
                            </div>
                        @endif
                        <form action="dangky" method="POST">
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
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
        </div>
        <div class="col-md-6" style="padding-bottom:120px">
             <h1 class="page-header">Đăng nhập</h1>
                <form action="{{ asset('')}}dangnhap" method="post">
                            {!! csrf_field() !!}
                            <div>
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" >
                                </div>
                            <br>    
                            <div>
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-default">Đăng nhập
                            </button>
                </form>             
        </div>
            
            
        </div>
    <!-- /#page-wrapper -->

 @endsection