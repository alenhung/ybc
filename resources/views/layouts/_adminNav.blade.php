<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('manage.dashboard')}}">{{ config('app.name', 'Laravel') }} <small>- 網站管理端</small></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">企業新聞 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">企業新聞清單</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">新增企業新聞</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">作品介紹 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">作品清單</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">新增作品</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">在建工程 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">在建工程清單</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">新增在建工程</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">使用者管理 <span class="caret"></span></a>
              <ul class="dropdown-menu">

                <li><a href="{{route('users.index')}}">管理者清單</a></li>
                <li><a href="{{route('users.create')}}">新增使用者</a></li>
                {{-- 分隔線 --}}
                <li role="separator" class="divider"></li>
                {{-- 次標題 --}}
                <li class="dropdown-header">權限相關設定</li>
                <li><a href="#">權限設定</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="{{route('users.index')}}">使用者管理</a></li>
                      {{-- 分隔線 --}}
                      <li role="separator" class="divider"></li>
                      {{-- 次標題 --}}
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                登出
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
