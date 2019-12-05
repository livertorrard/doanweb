  @extends('layout.layout_page')
  @section('content')
    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
    		<div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                	{{ thongbao_loi($errors) }}
                    
                    @if(session('thongbao'))
                           <div class="alert alert-danger">
                                 {{ session('thongbao') }}   
                            </div>
                        @endif
				  	<div class="dangki_form">
                         <h2> Đăng nhập</h2>

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
            </div>
                <div class="col-md-3"></div>
           
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->
    @endsection