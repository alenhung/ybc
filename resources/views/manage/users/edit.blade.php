@extends('layouts.adminTemplate')
@include('layouts._adminNav')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs 12">
        <h1>使用者管理介面</h1>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="{{route('users.create')}}" class="btn">新增管理者</a>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">修改管理者資料</div>
            <div class="panel-body">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                  {{method_field('PUT')}}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">使用者名稱</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">電子信箱</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required autofocus>
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
                            <button type="submit" class="btn btn-primary">修改帳戶資料</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
