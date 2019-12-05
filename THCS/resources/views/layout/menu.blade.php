<nav>
 <div class="main_menu_area">
      <div class="container menu_header">    
      <ul id="nav" class="nav">
        @foreach($theloai as $tl)
          @if(count($tl->loaitin)>0)
        <li><a >{{ $tl->ten }}</a>
          <ul>
            @foreach($tl->loaitin as $lt)
            <li><a href="{{ asset('')}}loaitin/{{ $lt->id }}/{{ $lt->tenkhongdau }}.html">{{ $lt->ten }}</a></li>
            @endforeach
          </ul>
        </li>
        @endif
       @endforeach
      </ul>
      </div>  
  </div>
</nav>
  