@extends('layouts.adminTemplate')
@include('layouts._adminNav')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs 12">
        <h1>{{$user->name}}</h1>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="{{route('users.create')}}" class="btn">新增使用者</a>
        <a href="{{route('users.edit', $user->id)}}" class="btn">修改會員資料</a>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">新增管理者相關資料</div>
            <div class="panel-body">
              <label for="name" class="col-md-4 control-label">使用者名稱</label>
              <pre>{{$user->name}}</pre>

              <label for="email" class="col-md-4 control-label">電子信箱</label>
              <pre>{{$user->email}}</pre>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
