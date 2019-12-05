  <nav aria-label="breadcrumb">

              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                @if(isset($tintuc))
                <li class="breadcrumb-item"><a href="#">{{ $tintuc->loaitin->theloai->ten }}</a></li>
                <li class="breadcrumb-item"><a href="#">{{ $tintuc->loaitin->ten }}</a></li>
                @endif
               {{--  <li class="breadcrumb-item active" aria-current="page">{{ $tintuc->tieude }}</li> --}}
              </ol>
  </nav>