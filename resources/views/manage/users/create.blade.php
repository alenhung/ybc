@extends('layouts.adminTemplate')
@include('layouts._adminNav')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-12 com-xs-12">
        @include('layouts.adminUserNav')
      </div>
      <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <div class="page-header">
          <h3>建立管理者</h3>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
          <form class="form-horizontal" action="{{route('users.store')}}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for="name" class="col-md-4 control-label">使用者名稱</label>
                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="user name">
                  </div>
              </div>
              <div class="form-group">
                  <label for="email" class="col-md-4 control-label">電子信箱</label>
                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="username@example.com">
                  </div>
              </div>
              <div class="form-group">
                  <label for="password" class="col-md-4 control-label">密碼</label>
                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control" name="password" required>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-8 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">新增管理者</button>
                  </div>
              </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
