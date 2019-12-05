    @extends('layout.index')

    @section('content')
       
        <div class="single_left_coloum_wrapper ">
            <h2 class="title" style=" text-transform:uppercase;">{{ $loaitin->ten }}</h2>
           
              @foreach($tintuc as $tt)
            <div class="single_left_coloum floatleft item_rep"> 
              <a href="{{ asset('')}}tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html">
              <img class="rounded" src="{{ asset('') }}upload/tintuc/{{ $tt->hinh }}" alt="" />
              <h3>{{ $tt->ten }}</h3>
              <p>{{ $tt->tomtat }}</p></a>
              {{-- <a class="readmore" href="#">read more</a>  --}}
            </div>
            @endforeach
        </div>
        
    @endsection
