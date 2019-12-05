@extends('layout.layout_page')
@section('content')


    <div class="main_content floatleft col-md-9 col-xs-12">
      @include('layout.breadcrumb')
            <div class ="row">
              <div class="left_coloum floatleft col-md-8">

                <h1><span class="title_content">{{ $tintuc->tieude }} </span><h1>
                <h2><span class="h2_title_content">{{ $tintuc->tomtat }}</span>
              <div class="socia_fb">
                 <div id="fb-root"></div>
                    <div class="fb-share-button" data-href="{{ asset('')}}tintuc/{{ $tintuc->id }}/{{ $tintuc->tieudekhongdau }}.html" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="{{ asset('')}} {{ $tintuc->id }}/{{ $tintuc->tieudekhongdau }}.html" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
            </div>
            <!--tin lien quan -->
            <div class="tin_lien_quan">
              <p style="color:red;">Tin liên quan:</p>
              @foreach($tinlienquan as $tt)
          
                <h3 > <a class="tomtat" href="{{ asset('')}}tintuc/{{ $tt->id }}/{{ $tt->tieudekhongdau }}.html"><span class="badge badge-danger">Liên quan</span> {{ $tt->tieude }} </a></h3>
              @endforeach
            </div>
            <div class="col-md-8 center" style="width: 100%; display: block;">
            <hr >
          </div>
            
            <!-- noi dung -->
              <article>{!! $tintuc->noidung !!}</article>
              <div class="arthur">
                  <p class="font-italic float-right text-secondary">được đăng bởi: <span class="font-italic text-secondary">{{ $tintuc->user->name }}</span> </p>
              </div>
              <hr>
              <!--end comment-->
              <ul class="list-unstyled">
                @foreach($tintuc->comment as $cm)
                <li class="media" style="margin-top: 5px;">
                  <img class="mr-3" src="{{ asset('')}}images/64x64.png" alt="Generic placeholder image">
                  
                  <div class="media-body">
                    <h5 class="mt-0 mb-1 font-weight-bold"> {{ $cm->user->name }} <small>{{ $cm->created_at }}</small> </h5>
                    {{ $cm->noidung }}
                  </div>
                </li>
                  @endforeach
              </ul>

              <!--end hien comment-->
              <hr>
              <!--comment -->
                   <div class="well">
                        <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                        <form role="form" action="{{ asset('')}}comment/{{ $tintuc->id }}" method="post">
                          {{ csrf_field() }}
                            <div class="form-group">
                                <textarea class="form-control" name="noidung" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark float-right">Gửi bình luận</button>
                        </form>
                            @if(session('thongbao'))
                               <p class="font-weight-bold" style="color:red;">
                                     {{ session('thongbao') }}   
                                <p>
                            @endif
                    </div>
                  

              </div>

              @include('layout.sidebar_center')
          </div> 
    </div>

    @include('layout.sidebar_right')

    @endsection

    @section('script')
    (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=198777157532208&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
    @endsection