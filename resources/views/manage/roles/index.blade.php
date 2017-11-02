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
          <h3>角色清單</h3>
          {{-- <a href="{{route('roles.create')}}"></a> --}}
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
                @foreach ($roles as $role)
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="content_block">
                        <h4>{{$role->display_name}}</h4>
                        <h5>{{$role->name}}</h5>
                        <em>{{$role->description}}</em>
                        <hr>
                        <p class="text-right">
                        <a href="{{route('roles.show' ,$role->id )}}" class="btn btn-sm btn-default">細節</a>
                        <a href="{{route('roles.edit' ,$role->id )}}" class="btn btn-sm btn-info">編輯</a>
                        </p>
                    </div>
                  </div>
              @endforeach
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
          <button type="button" href="{{route('roles.create')}}" class="btn btn-primary text-right">建立新角色</button>
        </div>
      </div>
    </div>
  </div>
@endsection
