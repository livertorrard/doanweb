
    <div class="header_area container">
      <div class="logo floatleft"><a href="{{ asset('')}}trangchu"><img src="{{ asset('')}}images/logo.png" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="{{ asset('')}}trangchu">Trang chủ</a></li>
          
          <li><a href="{{ asset('')}}lienhe">Liên Hệ</a></li>

          @if(Auth::check())
          <li><a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }}</a> </li>
          <li><a href="{{ asset('')}}dangxuat"><i class="fas fa-sign-out-alt fa-fw"></i>Đăng xuất</a></li>
          @else
          <li><a href="{{ asset('')}}dangky">Đăng ký</a></li>
          <li><a href="{{ asset('')}}dangnhap">Đăng nhập</a></li>
          @endif
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
        <!-- -->
{{--         <div class="input-group">
            <input class="form-control py-2 border-right-0 border" type="search" value="search" id="example-search-input">
            <span class="input-group-append">
                  <div class="input-group-text bg-transparent"><input type="submit" id="searchform" value="search" /></div>
            </span>
        </div> --}}
        <!-- -->
        <div class="search">
          <form action="{{ asset('') }}timkiem" method="get" id="search_form">
            <input type="text" name="tukhoa" 
            @if(isset($tukhoa))
           value="{{ $tukhoa }}"
            @endif 
            placeholder="Nhập từ khóa tìm kiếm" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>

