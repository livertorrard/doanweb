  @extends('layout.index')
  @section('content')
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
				  	<div class="panel-heading">Thông tin tài khoản {{ Auth::user()->name }}</div>
				  	<div class="panel-body">
				    	<form action="{{ asset('')}}thongtinuser" method="post">
				    		{!! csrf_field() !!}
				    		<div>
				    			<label>Họ tên</label>
							  	<input type="text" class="form-control" placeholder="Username" name="name" value="{{ Auth::user()->name }}" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" value="{{ Auth::user()->email }}" aria-describedby="basic-addon1"
							  	disabled
							  	>
							</div>
							<br>	
							<div>
								<input id="changePassword" type="checkbox" class="" name="checkpassword">
				    			<label>Đổi mật khẩu</label>
							  	<input  type="password" class="form-control pass_check" name="password" aria-describedby="basic-addon1" disabled="">
							</div>
							<br>
							<div>
				    			<label>Nhập lại mật khẩu</label>
							  	<input  type="password" class="form-control pass_check" name="passwordAgain" aria-describedby="basic-addon1" disabled="">
							</div>
							<br>
							<button type="submit" class="btn btn-default">Sửa
							</button>

				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
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