@extends('layouts.default')
@section('title','網站首頁')
@section('content')
  <header id="homeHeader" style="background-image: url({{ asset ('img/style2-1.jpg') }})">
    @include('layouts._nav')
    <img src="{{ asset ('img/intro-2-L-G.png') }}" class="headerImage img-responsive center-block visible-lg visible-md" alt="" data-aos="zoom-in">
    <img src="{{ asset ('img/intro-2-S-G.png') }}" class="headerImage img-responsive center-block visible-sm visible-xs" alt="" data-aos="zoom-in">
  </header>
{{-- intro Area --}}
<section id="introContent">
  <div class="container">
    <div class="row">
      <div class="introContentBlock col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-up">
        <img src="{{ asset ('img/image1.jpg')}}" class="img-circle center-block  introContentImage" alt="Responsive image" width="120" height="120">
        <h4>員邦歷程</h4>
        <hr class="introContentHr">
        <p class="hidden-xs">母是行神重花，園以。</p>
      </div>
      <div class="introContentBlock col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-up">
        <img src="{{ asset ('img/image2.jpg')}}" class="img-circle center-block introContentImage" alt="Responsive image" width="120" height="120">
        <h4>專業團隊</h4>
        <hr class="introContentHr">
        <p class="hidden-xs">母是行神重花，園以。</p>
      </div>
      <div class="introContentBlock col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-up">
        <img src="{{ asset ('img/image3.jpg')}}" class="img-circle center-block introContentImage" alt="Responsive image" width="120" height="120">
        <h4>在建工程</h4>
        <hr class="introContentHr">
        <p class="hidden-xs">母是行神重花，園以。</p>
      </div>
      <div class="introContentBlock col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-up">
        <img src="{{ asset ('img/image4.jpg')}}" class="img-circle center-block introContentImage" alt="Responsive image" width="120" height="120">
        <h4>都市更新</h4>
        <hr class="introContentHr">
        <p class="hidden-xs">母是行神重花，園以。</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12" data-aos="fade-in">
        <a  href="#" type="button" class="contactUsBtn btn themeStyleBtn ">想要了解更多？請直接聯繫我們</a>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</section>
{{-- intro Area --}}
{{-- works --}}
<section id="works">
  <div class="container">
    <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>熱銷建案</h2>
        <hr>
      </div>
      <div class="clearfix"></div>
      {{-- works item --}}
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-in">
        <div class="worksItem">
         <img src="./img/building/building1.jpg" height="100%" class="img-responsive center-block" alt="">
          <div class="worksContentmask">
            <div class="worksContentTitle">
              <p>都美艷</p>
              <hr class="worksContentHr">
            </div>
            <p class="worksContentDesc">北市西區小豪宅</p>
            <p class="circleMore center-block">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{ route('itemIntroduction') }}" class="info"></a>
          </div>
        </div>
      </div>
      {{-- works item --}}
      {{-- works item --}}
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-in">
        <div class="worksItem">
         <img src="./img/building/building2.jpg" height="100%" class="img-responsive center-block" alt="">
          <div class="worksContentmask">
            <div class="worksContentTitle">
              <p>台北甜心</p>
              <hr class="worksContentHr">
            </div>
            <p class="worksContentDesc">新北學區宅</p>
            <p class="circleMore center-block">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{ route('itemIntroduction') }}" class="info"></a>
          </div>
        </div>
      </div>
      {{-- works item --}}
      {{-- works item --}}
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-in">
        <div class="worksItem">
         <img src="./img/building/building3.jpg" height="100%" class="img-responsive center-block" alt="">
          <div class="worksContentmask">
            <div class="worksContentTitle">
              <p>員邦華宴</p>
              <hr class="worksContentHr">
            </div>
            <p class="worksContentDesc">坐擁北市西區便利</p>
            <p class="circleMore center-block">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{ route('itemIntroduction') }}" class="info"></a>
          </div>
        </div>
      </div>
      {{-- works item --}}
      {{-- works item --}}
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-in">
        <div class="worksItem">
         <img src="./img/building/building4.jpg" height="100%" class="img-responsive center-block" alt="">
          <div class="worksContentmask">
            <div class="worksContentTitle">
              <p>陽明峰匯</p>
              <hr class="worksContentHr">
            </div>
            <p class="worksContentDesc">經典之宅．豪氣萬千</p>
            <p class="circleMore center-block">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{ route('itemIntroduction') }}" class="info"></a>
          </div>
        </div>
      </div>
      {{-- works item --}}
      {{-- works item --}}
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-in">
        <div class="worksItem">
         <img src="./img/building/building5.jpg" height="100%" class="img-responsive center-block" alt="">
          <div class="worksContentmask">
            <div class="worksContentTitle">
              <p>員邦夢想家/美夢區</p>
              <hr class="worksContentHr">
            </div>
            <p class="worksContentDesc">經典之宅．豪氣萬千</p>
            <p class="circleMore center-block">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{ route('itemIntroduction') }}" class="info"></a>
          </div>
        </div>
      </div>
      {{-- works item --}}
      {{-- works item --}}
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-in">
        <div class="worksItem">
         <img src="./img/building/building6.jpg" height="100%" class="img-responsive center-block" alt="">
          <div class="worksContentmask">
            <div class="worksContentTitle">
              <p>員邦夢想家/圓夢區</p>
              <hr class="worksContentHr">
            </div>
            <p class="worksContentDesc">經典之宅．豪氣萬千</p>
            <p class="circleMore center-block">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{ route('itemIntroduction') }}" class="info"></a>
          </div>
        </div>
      </div>
      {{-- works item --}}
      {{-- works item --}}
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-in">
        <div class="worksItem">
         <img src="./img/building/building7.jpg" height="100%" class="img-responsive center-block" alt="">
          <div class="worksContentmask">
            <div class="worksContentTitle">
              <p>桂林苑</p>
              <hr class="worksContentHr">
            </div>
            <p class="worksContentDesc">經典之宅．豪氣萬千</p>
            <p class="circleMore center-block">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{ route('itemIntroduction') }}" class="info"></a>
          </div>
        </div>
      </div>
      {{-- works item --}}
      {{-- works item --}}
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" data-aos="fade-in">
        <div class="worksItem">
         <img src="./img/building/building8.jpg" height="100%" class="img-responsive center-block" alt="">
          <div class="worksContentmask">
            <div class="worksContentTitle">
              <p>士林新天地</p>
              <hr class="worksContentHr">
            </div>
            <p class="worksContentDesc">經典之宅．豪氣萬千</p>
            <p class="circleMore center-block">MORE</p>
          </div>
          <div class="worksItemLink">
            <a href="{{ route('itemIntroduction') }}" class="info"></a>
          </div>
        </div>
      </div>
      {{-- works item --}}
    </div>
  </div>
  </div>
</section>
{{-- works --}}
{{-- home foot --}}
<section id="homeFoot">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-aos="fade-in">
        <div class="homeFootItem">
        <img src="{{ asset ('img/footContent1.jpg') }}" class="img-responsive center-block" height="560px" width="320px" alt="">
          <div class="homeFootContentmask">
            <div class="homeFootContentTitle">
              <p>企業新聞</p>
              <hr>
            </div>
            <p class="homeFootContentDesc">Recent news</p>
          </div>
          <div class="homeFootItemLink">
            <a href="#" class="info"></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-aos="fade-in">
        <div class="homeFootItem">
        <img src="{{ asset ('img/footContent2.jpg') }}" class="img-responsive center-block" height="560px" width="320px" alt="">
          <div class="homeFootContentmask">
            <div class="homeFootContentTitle">
              <p>客戶服務</p>
              <hr>
            </div>
            <p class="homeFootContentDesc">Service</p>
          </div>
          <div class="homeFootItemLink">
            <a href="#" class="info"></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-aos="fade-in">
        <div class="homeFootItem">
        <img src="{{ asset ('img/footContent3.jpg') }}" class="img-responsive center-block" height="560px" width="320px" alt="">
          <div class="homeFootContentmask">
            <div class="homeFootContentTitle">
              <p>工程進度</p>
              <hr>
            </div>
            <p class="homeFootContentDesc">schedule</p>
          </div>
          <div class="homeFootItemLink">
            <a href="#" class="info"></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-aos="fade-in">
        <div class="homeFootItem">
        <img src="{{ asset ('img/footContent4.jpg') }}" class="img-responsive center-block" height="560px" width="320px" alt="">
          <div class="homeFootContentmask">
            <div class="homeFootContentTitle">
              <p>聯絡我們</p>
              <hr>
            </div>
            <p class="homeFootContentDesc">contact us</p>

          </div>
          <div class="homeFootItemLink">
            <a href="#" class="info"></a>
          </div>
        </div>
      </div>
  </div>
</section>
{{-- home foot --}}
@include('layouts._foot')
@stop
