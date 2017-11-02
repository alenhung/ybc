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
          <h3>{{$role->display_name}}<small>{{$role->name}}</small></h3>
          <h5>{{$role->description}}</h5>
          {{-- <a href="{{route('roles.create')}}"></a> --}}
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <h5>權限清單：</h5>
            <ul>
              @foreach ($role->permissions as $r)
              <li>{{$r->display_name}} <em>{{$r->description}}</em></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
          <a href="{{route('roles.edit', $role->id)}}" class="btn btn-info">修改角色權限</a>
        </div>
      </div>
    </div>
  </div>
@endsection
