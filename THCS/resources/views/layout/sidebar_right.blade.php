<div class="sidebar floatright col-md-3 col-xs-12">
        <div class="single_sidebar"> <img src="{{ asset('')}}images/bacho.gif" alt="" /> </div>
        <div class="single_sidebar">
           @if(Auth::check())
             @else
          <div class="news-letter">

            <h2>ĐĂNG NHẬP</h2>
            <p>Bạn chưa có tài khoản vui lòng <a class="badge badge-danger" href="dangki">đăng kí</a></p>
            
            <form action="{{ asset('')}}dangnhap" method="post">
              {!! csrf_field() !!}
              <input type="email" placeholder="email" name="email" id="email" />
              <input type="password" placeholder="mật khẩu" name="password" id="password" />
              <input type="submit" value="Đăng nhập" id="form-submit" />
            </form>
          
          </div>
            @endif
        </div>
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">TIN NỔI BẬT</h2>
            <ul>
              <?php
              $tinnoibat = $tt_chung->where('noibat',1)->sortByDesc('created_at')->take(5);
               ?>
               @foreach($tinnoibat as $tt)
              <li>
                <div class="single_popular">
                  <p>{{ $tt->created_at }}</p>
                 <a href="{{ asset('')}}tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html"> <h3 class="tomtat"><span class="badge badge-danger">HOT</span> {{ $tt->tieude }} </h3></a>
                {{--    <h3>aaaaa <a href="#" class="readmore">Read More</a></h3> --}}
                </div>
              </li>
              @endforeach
           
            
             
            
            </ul>
            {{-- <a class="popular_more">more</a> --}} </div>
        </div>
        <div class="single_sidebar"> <img src="{{ asset('')}}images/123.gif" alt="" /> </div>
        <div class="single_sidebar">
          <h2 class="title">Chuyên Mục Quảng Cáo</h2>
          <img src="{{ asset('')}}images/cdm.gif" alt="" /> </div>
      </div>