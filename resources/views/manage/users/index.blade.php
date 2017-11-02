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
          <h3>管理者清單</h3>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <table class="table table-responsive">
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
                  <td><a class="btn btn-info btn-sm" role="button" href="{{route('users.edit',$user->id)}}">編輯</a></td>
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
