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
          <h3>編輯{{$role->display_name}}</h3>
          {{-- <a href="{{route('roles.create')}}"></a> --}}
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <h5>角色資料：</h5>
            <form class="form-horizontal" action="{{route('roles.update',$role->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="display_name" class="col-md-4 control-label">顯示名稱（可讀性）</label>
                    <div class="col-md-6">
                        <input id="display_name" type="text" class="form-control" name="display_name" value="{{ $role->display_name }}" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">名稱（不可更改）</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $role->name }}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-4 control-label">描述</label>
                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control" name="description" value="{{ $role->description }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">修改角色說明</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
