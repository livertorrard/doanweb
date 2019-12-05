    @extends('layout.index')

    @section('content')

        
           

            <?php
            function doimautukhoa($str,$tukhoa){
            	return str_replace($tukhoa, '<span style="color:red;">'. $tukhoa .'</span>', $str);
            }

             ?>
        <div class="single_left_coloum_wrapper col-md-auto">
            <h2 class="title" style=" text-transform:uppercase;"><b>Tìm kiếm từ khóa: {{ $tukhoa }} </b></h2>
             
                       
                        
                  
              @if(count($tintuc) >=1)  
              @foreach($tintuc as $tt)
            <div class="single_left_coloum floatleft item_rep"> 
              <a href="{{ asset('')}}tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html">
              <img class="rounded" src="upload/tintuc/{{ $tt->hinh }}" alt="" />
              <h3>{!! doimautukhoa($tt->tieude,$tukhoa) !!} {{ $tt->ten }}</h3>
              <p>{!! doimautukhoa($tt->tomtat,$tukhoa) !!}</p></a>
              {{-- <a class="readmore" href="#">read more</a>  --}}
            </div>
            @endforeach
            @else 
             {{ 'không tìm thấy kết quả phù hợp' }}
            @endif
        </div>
            <div id="pa_bottoom" class="col-md-4 center text-center">
                         {{ $tintuc->appends(['tukhoa' => $tukhoa])->links() }}  
            </div>
           
           


                    <!-- Pagination -->
                    
                    
              

       
    @endsection
