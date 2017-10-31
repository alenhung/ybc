<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <title>@yield('title', '沒有填入用這個字串')- 員邦建設</title>
    <meta name="keyword" content="給搜尋網頁的關鍵字">
    <meta name="description" content="員邦建設公司的敘述">
    <meta name="author" content="員邦建設">
    {{-- MOBILE FIRST --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0,user-scalable=no">
    <link rel="icon" href="{{ asset ('img/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    {{-- bootstrap-select Latest compiled and minified CSS--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <!--載入自行設定的CSS-->
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/screen.css') }}">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--BackToTop-->
    <script src="{{ asset ('js/modernizr.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
  </head>
 <body>
   @yield('content')
   {{-- backToTop --}}
 	<a href="#0" class="cd-top "><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
 	{{-- End BackToTop --}}
     {{-- 最新的 Bootstrap 核心 JavaScript 文件 --}}
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     {{-- bootstrap-select Latest compiled and minified JavaScript --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
     <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
     <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
     <script src="{{ asset ('js/backToTop.js') }}"></script>
     <script src="{{ asset ('js/navScroll.js') }}"></script>
     <script src="{{ asset ('js/site.js') }}"></script>
   </body>
 </html>
