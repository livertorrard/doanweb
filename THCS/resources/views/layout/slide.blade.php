<div class="row">
    <div class="slider_area col-md-8">
      <div class="slider owl-carousel">
        <ul class="bxslider">
        	@foreach($slide as $sl)
          <li><a href="{{ $sl->link }}"><img src="{{ asset('')}}upload/slide/{{ $sl->hinh }}" alt="" title="{{ $sl->noidung }}" /></a></li>
        	@endforeach
        </ul>
      </div>
      <script type="text/javascript">
       $(document).ready(function(){
          $('.bxslider').bxSlider({
            auto:true,
            captions: true,

          });
        });
      </script>
    </div>
    	<?php
    	$data_slide = $tt_chung->sortByDesc('created_at')->take(7);
    	 ?>

		    <div class="col-md-4">
		    	
		    	
		    	@foreach($data_slide as $tt)
		    	<div class="single_cat_right_content">
		                  <h3  ><a class="tomtat" href="{{ asset('')}}tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html"><span class="badge badge-danger">New</span> {{ $tt->tieude }}</a></h3>
		                 	
		          
		        </div>
		        
		        @endforeach
    </div>

</div>
