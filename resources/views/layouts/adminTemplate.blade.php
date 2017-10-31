<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta content="width=device-width,initial-scale=1" name="viewport" /> --}}
    <title>{{ config('app.name', 'Laravel') }} - 管理介面</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- MOBILE FIRST --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0,user-scalable=no">
    <link rel="icon" href="{{ asset ('img/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <!--載入自行設定的CSS-->
    <link rel="stylesheet" href="{{ asset ('css/admin.css') }}">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
 <body>
   @yield('content')

     {{-- 最新的 Bootstrap 核心 JavaScript 文件 --}}
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
   </body>
 </html>
