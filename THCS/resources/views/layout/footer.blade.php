<div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu">
          <?php
          $footer_tt = $lt_chung->Random(5);
          ?>
          @foreach($footer_tt as $lt)
          <li><a class="tomtat" href="{{ asset('')}}loaitin/{{ $lt->id }}/{{ $lt->tenkhongdau }}.html">{{ $lt->ten }}</a></li>
          @endforeach
          
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2019 THCS THỊ TRẤN LA HÀ  |  Design by Bùi Văn Vạn Quý  |  Khoa CNTT & TT - Đại Học Đà Nẵng</p>

      </div>
    </div>
   
