
<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('home') }}"><img src="./img/companyLogo.png" alt="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('about') }}">公司簡介</a></li>
            {{-- <li><a href="#">建築工藝</a></li> 2017/10/31 移除--}}
            <li><a href="{{ route('works') }}">作品介紹</a></li>
            <li><a href="#">在建工程</a></li>
            <li><a href="#">都市更新</a></li>
            <li><a href="{{ route('contact') }}">客戶服務</a></li>
            <!--
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">關係企業</a></li>
            <li><a href="#">人才招募</a></li>
            <!-- <li class="active"><a href="#">Static top <span class="sr-only">(current)</span></a></li> -->

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
