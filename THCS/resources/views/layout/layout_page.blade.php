<!DOCTYPE html>
<html>
<head>
<title>Sở giáo dục đào tạo ...</title>
<link rel="icon" href="{{ asset('')}}images/logo.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="{{ asset('')}}assets/fontawesome/css/fontawesome-all.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('')}}assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('')}}assets/owl/owl.carousel.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('')}}assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('')}}assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('')}}assets/css/jquery.bxslider.min.css" media="screen" />


<script type="text/javascript" src="{{ asset('')}}assets/js/jquery-3.3.1.slim.min.js"></script> 
<script type="text/javascript" src="{{ asset('')}}assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="{{ asset('')}}assets/js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="{{ asset('')}}assets/owl/owl.carousel.min.js"></script> 
<script type="text/javascript" src="{{ asset('')}}assets/js/selectnav.min.js"></script> 

</head>
<body>
<div class="body_wrapper">
    <!-- HEADER-->
    <header class="center1">
        @include('layout.header')
        @include('layout.menu')
    </header>
    <!--END HEADER-->
<!-- noidung trang article-->
    <article class="container">
        <div class="content_area row">
            @yield('content')
        </div>
    </article>  
<!--end noidung trang article-->

<!-- footer --> 
    <footer class="container">    
        @include('layout.footer_quangcao')
        @include('layout.footer')
    </footer> 
<!-- end footer -->  

</div>
</div>
<script type="text/javascript">
selectnav('nav', {
    label: '-MENU-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-ĐIỀU HƯỚNG-',
    nested: true,
    indent: '-'
});
 @yield('script')
</script>
</body>
</html>