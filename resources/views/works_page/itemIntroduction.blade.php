@extends('layouts.default')
@section('title','公司簡介')
@section('content')
  <section id="contentHeader" style="background: url('./img/worksBackground3.jpg')">
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
{{-- works-item-introduction --}}
<section id="worksItem">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-5"><img src="./img/building/building1.jpg" class="img-responsive center-block" alt=""></div>
      <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1">
        <h2>都美艷</h2>
        <hr>
        <p>擁有臺北市中心稀有3500坪（約11,550平方米）基地，緊鄰1300坪（約4,290平方米）公園、形成4800坪（約15,840平方米）森態街廓，只蓋兩棟樓，擁有奢侈的40~120米隱密棟距，中庭及公園覆土深達2米，種植300餘棵10年以上樹齡大型喬木，其中包含110棵的樟樹，環繞社區形成護城林。五指山系樹海景觀、大直水岸景觀。</p>
        <hr>
        <dl class="dl-horizontal">
            <dt>基地位置：</dt>
            <dd>台北市萬華區桂林西昌路口</dd>
            <dt>建設規劃：</dt>
            <dd>Ａ棟－地上23樓 / 地下5樓、B棟－地上15樓</dd>
            <dt>基地面積：</dt>
            <dd>418坪</dd>
            <dt>總戶數：</dt>
            <dd>188戶</dd>
            <dt>坪數/格局：</dt>
            <dd>16~43坪 / 1~3房</dd>
            <dt>公設比：</dt>
            <dd>33%</dd>
            <dt>樓高：</dt>
            <dd>一樓大廳4米2、住家3米3</dd>
            <dt>接待中心：</dt>
            <dd>台北市萬華區西昌街134號</dd>
            <dt>完工日期：</dt>
            <dd>預定2019年</dd>
        </dl>
        <a  href="#" type="button" class="btn themeStyleBtn">了解更多？前往專屬網站</a>
      </div>
    </div>
  </div>
</section>
{{-- works-item-introduction   --}}
{{-- google map section --}}
<section>
  <div id="caseLocationMap" style="height: 300px;"></div>
</section>
{{-- google map section --}}
{{-- go back --}}
<div class="container backtoDiv">
  <div class="row">
    <div class="col-lg-12">
      <a  href="{{ route('works') }}" type="button" class="btn themeDarkerStyleBtn center-block">返回熱銷建案列表</a>
    </div>
  </div>
</div>
{{-- go back --}}
@php
        $case_name = "都美艷";
        $set_address="台北市萬華區西昌街134號"; //填寫所要的地址，Example地址為勤美綠園道
        $data_array = geocode($set_address);
        $latitude = $data_array[0];
        $longitude = $data_array[1];
        $data_address = $data_array[2];
        //-----Google map value End-----
        //-----function start-----
        function geocode($address){
            /*用來將字串編碼，在資料傳遞的時候，如果直接傳遞中文會出問題，所以在傳遞資料時，通常會使用urlencode先編碼之後再傳遞*/
            $address = urlencode($address);
            /*可參閱：(https://developers.google.com/maps/documentation/geocoding/intro)*/
            $url = "http://maps.google.com/maps/api/geocode/json?address={$address}&language=zh-TW";
            /*取得回傳的json值*/
            $response_json = file_get_contents($url);
            /*處理json轉為變數資料以便程式處理*/
            $response = json_decode($response_json, true);
            /*如果能夠進行地理編碼，則status會回傳OK*/
            if($response['status']='OK'){
                //取得需要的重要資訊
                $latitude_data = $response['results'][0]['geometry']['location']['lat']; //緯度
                $longitude_data = $response['results'][0]['geometry']['location']['lng']; //精度
                $data_address = $response['results'][0]['formatted_address'];
                if($latitude_data && $longitude_data && $data_address){
                    $data_array = array();
                    //一個或多個單元加入陣列末尾
                    array_push(
                        $data_array,
                        $latitude_data, //$data_array[0]
                        $longitude_data, //$data_array[1]
                        '<b>建案位置: </b> '.$data_address //$data_array[2]
                    );
                    return $data_array; //回傳$data_array
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
@endphp
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8tciuZhAxCTUCXJuCHc8-haAFNQk92Dk&libraries=places"></script>
<script>
    function init_map() {
        /*地圖參數相關設定 Start*/
        var Options = {
            zoom: 17, /*縮放比例*/
            center: new google.maps.LatLng( <?php echo $latitude;?>,  <?php echo $longitude;?>) /*所查詢位置的經緯度位置*/
        };

        map = new google.maps.Map(document.getElementById("caseLocationMap"), Options);
        /*地圖參數相關設定 End*/

        /*自行設定圖標 Start*/
        var image = {
            url: 'https://google-developers.appspot.com/maps/documentation/javascript/examples/full/images/beachflag.png', /*自定圖標檔案位置或網址*/
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(20, 32), /*自定圖標大小*/
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(0, 32)
          };

        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(<?php echo $latitude;?>, <?php echo $longitude;?>), /*圖標經緯度位置*/
            //icon: image
        });
        /*自行設定圖標 End*/
        /*所查詢位置詳細資料 Start*/
        infowindow = new google.maps.InfoWindow({
            content: "<?php echo $data_address; ?>"
        });

        infowindow.open(map, marker);
        /*所查詢位置詳細資料 End*/
    }

    /*
    事件偵聽器(可參閱：https://developers.google.com/maps/documentation/javascript/events)
    */
    google.maps.event.addDomListener(window, 'load', init_map);
</script>
  @include('layouts._foot')
  @stop
