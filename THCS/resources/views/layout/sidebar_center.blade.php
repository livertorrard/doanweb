<div class="right_coloum floatright col-md-4 col-xs-12">
   
          <div class="single_right_coloum">
            <h2 class="title">TIN ĐỀ XUẤT</h2>
            <ul>
             <?php
              $tin1 =$tt_chung->take(3);
               ?>
              @foreach($tin1 as $tt)
              <li>
                <div class="single_cat_right_content">
                  <a href="{{ asset('')}}tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html">
                  <h3>{{ $tt['tieude'] }}</h3>
                  <p class="tomtat">{{ $tt['tomtat'] }}</p>
                  </a>
                  <p class="single_cat_right_content_meta"><a href="{{ asset('')}}tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html"><span>xem tin</span></a> {{ $tt['created_at']->diffForHumans() }}</p>
                </div>
              </li>
              @endforeach
    
            </ul>
            {{-- <a class="popular_more" href="#">more</a>  --}}</div>
           
          <div class="single_right_coloum">
            <h2 class="title">TIN HOT</h2>
             <?php
            $tin2 = $tt_chung->take(4);
            ?>
            @if($tin2 != $tin1)
            @foreach($tin2 as $tt)
            <div  class="single_cat_right_content editorial">
              <a href="{{ asset('')}}tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html">
             <img  style="height: 110px;" src="{{ asset('')}}upload/tintuc/{{ $tt->hinh }}" alt="" />
              <h3>{{ $tt->tomtat }}</h3>
            </a>
            </div>
            @endforeach
            @endif
          </div>
     
        </div>