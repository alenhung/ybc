@extends('layouts.default')
@section('title','公司簡介')
@section('content')
  <section id="contentHeader" style="background: url({{ asset ('img/serviceBackground.jpg') }})">
    @include('layouts._nav')
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="contentHeaderBlock">
            <h2>客戶服務</h2>
            <hr>
            <p>Service Contact of YuanBang Land</p>
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
          <li class="active">客戶服務</li>
          <li ><a href="#">服務流程SOP</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  {{-- page-nav   --}}
{{-- serviceIntro Area --}}
<section id="serviceIntro">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <img src="./img/serviceImage1.jpg" class="img-responsive center-block" alt="">
        <p class="text-center">客戶服務</p>
        <ul>
          <li>線上工程進度照片每月更新瀏覽</li>
          <li>客戶變更作業</li>
          <li>發送簡訊關懷</li>
          <li>發送問候卡片</li>
          <li>住戶生活使用手冊</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <img src="./img/serviceImage2.jpg" class="img-responsive center-block" alt="">
        <p class="text-center">售後服務</p>
        <ul>
          <li>房屋保固服務</li>
          <li>保固期後修繕服務及優良廠商提供</li>
          <li>水錶、電錶之過戶處理</li>
          <li>保固期滿年度社區公設健檢</li>
          <li>保固期內DIY活動辦理</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <img src="./img/serviceImage3.jpg" class="img-responsive center-block" alt="">
        <p class="text-center">開發洽談</p>
        <ul>
          <li>都市更新相關開發</li>
          <li>合建案相關開發</li>
          <li>其他合作開發</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <img src="./img/serviceImage4.jpg" class="img-responsive center-block" alt="">
        <p class="text-center">其他問題</p>
        <ul>
          <li>預約賞屋</li>
          <li>其他問題諮詢</li>
        </ul>
      </div>
    </div>
  </div>
</section>
{{-- serviceIntro Area --}}
{{-- contact Section --}}
<section id="contactSection">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>聯絡我們</h2>
        <hr>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-12 col-xm-12">
        <p>永續經營的事業，是永不止息的馬拉松競賽。<p>
        <p>超越競爭者的勝利只在一時，穩定步伐中的挑戰極限、邁向成功，才是真正的贏家！在瞬息萬變的消費者時代，豪宅建案百家爭鳴，但是在員邦全體員工的努力下，始終以居住者的最高舒適度為第一考量，無止盡的努力不懈、堅持用心，所以才能每次推案始終領先群雄，贏得讚美和掌聲。</p>


        <p>服務電話：+886-2-2381-8666</p>
        <p>E-MAIL：service@yuanbang.com.tw</p>
        <p>通訊地址：台北市中華路一段90號4F</p>
      </div>
      <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1">
        <p>請簡述您的相關問題</p>
        <div class="row">
          <div class="col-lg-6 col-md-6 formDiv">
            <input type="text" class="form-control" id="formName" placeholder="客戶姓名">
          </div>
          <div class="col-lg-6 col-md-6 formDiv">
            <input type="text" class="form-control" id="formPhone" placeholder="聯絡電話">
          </div>
          <div class="col-lg-12 col-md-12 formDiv">
            <input type="email" class="form-control" id="formEmail" placeholder="聯絡用電子信箱">
          </div>
          <select class="selectpicker col-lg-12 col-md-12 formDiv" title="問題分類">
            <option>土地開發</option>
            <option>鄰房問題</option>
            <option>購屋相關</option>
            <option>其他問題</option>
          </select>

          <div class="col-lg-12 formDiv">
            <textarea class="form-control" rows="3" placeholder="您的諮詢內容"></textarea>
          </div>
          <a href="#"  type="button" class="btn themeDarkerStyleBtn cantactSendBtn">送出問題</a>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
{{-- contact Section --}}
  @include('layouts._foot')
  @stop
