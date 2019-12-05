@extends('layout.index')
@section('content')

<div class="main_content floatleft col-md-9 col-xs-12">
        <div class ="row">
        <div class="left_coloum floatleft col-md-7 col-xs-12">
          @foreach($theloai as $tl)
            @if(count($tl->loaitin)>0)
            <!-- start if -->    
            <?php
              $data1= $tl->loaitin->random()->take(1);
               ?>      
              @foreach($data1 as $lt)
              
                @if(count($lt->tintuc)>1)
          <div class="single_left_coloum_wrapper">
            <h2 class="title" style=" text-transform:uppercase;">{{ $lt->ten }}</h2>
            <a class="more more_title" href="#">XEM</a>
            <?php
                $data = $lt->tintuc->sortByDesc('create_at')->take(3);
             ?>
              @foreach($data as $tt)
            <div class="single_left_coloum floatleft item_rep"> 
              <a href="{{ asset('')}}tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html">
              <img class="rounded" src="{{ asset('')}}upload/tintuc/{{ $tt->hinh }}" alt="" />
              <h3>{{ $tt->ten }}</h3>
              <p class="tomtat">{{ $tt->tomtat }}</p></a>
              {{-- <a class="readmore" href="#">read more</a>  --}}
            </div>
              @endforeach 
          </div>
                @endif
           @endforeach

            @endif
            <!-- start if -->
          @endforeach
          <div class="single_left_coloum_wrapper gallery">
            <h2 class="title">TIN ẢNH</h2>
            <a class="more" href="#">XEM</a> 
            <?php
            $gala_anh = $tt_chung->take(2);
             ?>
            @foreach($gala_anh as $tt)
            <a href="tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html"><img class="img-thumbnail rounded" style="height: 110px; max-width: 143px; width: auto" src="upload/tintuc/{{ $tt->hinh }}" alt="{{ $tt->tomtat }}" /><a>
            @endforeach
           </div>
          <div class="single_left_coloum_wrapper single_cat_left">
            <h2 class="title">ĐƯỢC QUAN TÂM</h2>
           {{--  <a class="more" href="#">more</a> --}}
            <?php
            $tt_chung1 = $tt_chung->take(12);
             ?>
            @foreach($tt_chung1 as $tt)

            @if(count($tt->comment)>0 )
            
            <div class="single_cat_left_content floatleft">
              <a href="tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html">
              <h3>{{ $tt->tieude }} </h3>
              <p class="tomtat">{{ $tt->tomtat }}</p>
              </a>
              <p class="single_cat_left_content_meta">by <span>{{ $tt->user->name }}</span> |  {{ count($tt->comment) }} Bình luận</p>
            </div>
             @endif
            @endforeach
           
          </div>
        </div>
        @include('layout.sidebar_center')
      </div>
    </div>

    @include('layout.sidebar_right')

    @endsection