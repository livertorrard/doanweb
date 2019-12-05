@extends('layout.layout_page')

@section('content')

	<div class="col-md-2"></div>
		<div class="col-md-8">
			<form style="margin-bottom: 20px;">
			  <div class="form-row">
			    <div class="form-group col-md-6">

			      <label for="inputEmail4">Họ tên</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Số điện thoại</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="">
			    </div>
			  </div>
			  <div class="form-group">
			  	  <div class="form-group">
			    <label for="inputAddress2">Tiêu đề</label>
			    <input type="text" class="form-control" id="inputAddress2" placeholder="" rows="5" >
			  </div>
			    <label for="inputAddress">Địa chỉ</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="inputAddress2">Nội dung</label>
			    <input type="text" class="form-control form-control-lg" id="inputAddress2" placeholder="" rows="5" >
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputCity">City</label>
			      <input type="text" class="form-control" id="inputCity">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputState">State</label>
			      <select id="inputState" class="form-control">
			        <option selected>Choose...</option>
			        <option>...</option>
			      </select>
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputZip">Zip</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			  </div>

			  <button type="submit" class="btn btn-primary">Gửi</button>
			</form>
		</div>
	<div class="col-md-2"></div>
	<div class="col-md-6 center">
		<h3>Địa chỉ Liên hệ</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249139.01980409995!2d107.88761776214876!3d12.661299025091179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3171f7d4216cd2fb%3A0x9f4a5ec2f999fb4!2zVHAuIEJ1w7RuIE1hIFRodeG7mXQsIMSQ4bqvayBM4bqvaywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1524973765035" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
@endsection
