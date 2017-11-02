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
          <h3>新增管理者</h3>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
          <div class="form-horizontal">
          <div class="form-group">
              <label for="name" class="col-md-4 control-label">使用者名稱</label>
              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" placeholder="{{$user->name}}" readonly>
              </div>
          </div>
          <div class="form-group">
              <label for="email" class="col-md-4 control-label">電子信箱</label>
              <div class="col-md-6">
                  <input id="email" type="email" class="form-control"  placeholder="{{$user->email}}" readonly>
              </div>
          </div>
          <div class="form-group text-center">
            <a href="{{route('users.index')}}" class="btn btn-primary">返回管理者清單</a>
            </div>
        </div>
        </div>
        </div>

      </div>
    </div>
  </div>
@endsection
