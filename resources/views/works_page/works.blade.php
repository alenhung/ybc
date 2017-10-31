@extends('layouts.default')
@section('title','公司簡介')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('img/worksBackground3.jpg') }})">
    @include('layouts._nav')
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="contentHeaderBlock">
            <h2>作品介紹</h2>
            <hr>
            <p>company overview of YuanBang Land</p>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- page-nav --}}
<section id="pageNav">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <ul class="list-inline">
          <li class="active">熱銷建案</li>
          <li ><a href="#">在建工程</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
{{-- page-nav   --}}
{{-- works item --}}
<section id="works">
  <div class="container">
    <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="special">熱銷建案</h2>
      </div>
      <div class="clearfix"></div>
      {{-- works-item --}}
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
      {{-- works-item --}}
      {{-- works-item --}}
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
      {{-- works-item --}}
      {{-- works-item --}}
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
      {{-- works-item --}}
      {{-- works-item --}}
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
      {{-- works-item --}}
      {{-- works-item --}}
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
      {{-- works-item --}}
      {{-- works-item --}}
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
      {{-- works-item --}}
      {{-- works-item --}}
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
      {{-- works-item --}}
      {{-- works-item --}}
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
      {{-- works-item --}}
    </div>
  </div>
  </div>
</section>
{{-- works item --}}
@include('layouts._foot')
@stop
