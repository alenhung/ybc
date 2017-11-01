@extends('layouts.adminTemplate')
@include('layouts._adminNav')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs 12">
        <h1>使用者管理介面</h1>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="{{route('users.create')}}" class="btn">新增使用者</a>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading">管理者清單</div>
          <div class="panel-body">
            <table class="table table-striped table-responsive">
              <thead>
                <tr>
                  <th>編號</th>
                  <th>使用者名稱</th>
                  <th>電子信箱</th>
                  <th>建立日期</th>
                  <th>編輯</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at->toformattedDateString()}}</td>
                  <td><a class="btn btn-primary" role="button" href="{{route('users.edit',$user->id)}}">修改</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {{$users->links()}}
      </div>
    </div>
  </div>
@endsection
