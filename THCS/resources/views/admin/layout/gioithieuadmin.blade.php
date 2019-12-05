@extends('admin.layout.index')

@section('content')
  <style>

  </style>
</head>

<body>
        <div id="page-wrapper">
            <div class="container-fluid">
            	  <style>
  .bg-1 { 
      border-style: solid;
      border-color: coral;
      color: #White ;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  </style>
<div class="container-fluid bg-1 text-center">
  <h3>Trang Quản Trị</h3>
  <img src="upload/img/anh1.jpg"  alt="Bird" width="900" height="500">
 <!-- class="img-circle" -->
</div>

<div class="container-fluid bg-2 text-center">
  <h3>Bạn có thể làm gì?</h3>
  <p>Nơi đây sẽ giúp bạn quản trị toàn bộ trang website, các nội dung tin tức được cập nhập tại đây. Được sử dụng toàn bộ chức năng của trang web</p>
  <pre><code>Ban Quản Lý Trường THCS Thị Trấn La Hà - Huyện Tư Nghĩa - Tỉnh Quảng Ngãi
</code></pre>
</div>
@endsection